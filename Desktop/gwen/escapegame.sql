drop database if exists PartiesDB;
create database Partiesdb;
use PartiesDB;

create table CentreLocal(
        id char(5) not null default 'XXXXX',
    nom varchar(45),
    lieu varchar(25),
    adresse varchar(150),
    GPS varchar(60),
    primary key(id)
)engine InnoDB;

create table Salle(
        id int auto_increment not null,
    score int default 0,
    primary key(id)
)engine InnoDB;

create table Equipe(
id int auto_increment not null,
nom varchar(100),
primary key(id)
)engine InnoDB;

create table Tournoi(
id int auto_increment not null,
nom varchar(100),
primary key(id)
)engine InnoDB;

create table Joueurs(
        id int auto_increment not null,
    pseudo varchar(10) not null unique,
    estActif boolean not null default false,
    heureCreation timestamp not null default now(),
    centre char(5) not null default 'XXXXX',
    primary key(id),
    constraint foreign key(centre) references CentreLocal(id)
)engine InnoDB;

create table Partie(
        id int auto_increment not null,
        heureDepart timestamp not null default now(),
    heureFin timestamp not null,
    score int not null default 0,
    idScenario int not null,
    idSalle int,
    primary key(id),
    constraint foreign key(idSalle) references Salle(id) on update restrict
)engine InnoDB;

create table TES(
scrore int,
idSalle int,
idEquipe int,
idTournoi int,
primary key(idSalle,idEquipe,idTournoi),
constraint foreign key(idSalle) references Salle(id) on update restrict,
constraint foreign key(idEquipe) references Equipe(id) on update restrict,
constraint foreign key(idTournoi) references Tournoi(id) on update restrict
)engine InnoDB;


create table TS(
idSalle int,
idTournoi int,
primary key(idSalle,idTournoi),
constraint foreign key(idSalle) references Salle(id) on update restrict,
constraint foreign key(idTournoi) references Tournoi(id) on update restrict
)engine InnoDB;

create table TE(
idEquipe int,
idTournoi int,
primary key(idEquipe,idTournoi),
constraint foreign key(idEquipe) references Equipe(id) on update restrict,
constraint foreign key(idTournoi) references Tournoi(id) on update restrict
)engine InnoDB;

create table EJ(
idEquipe int,
idJoueurs int,
primary key(idEquipe,idJoueurs),
constraint foreign key(idEquipe) references Equipe(id) on update restrict,
constraint foreign key(idJoueurs) references Joueurs(id) on update restrict
)engine InnoDB;

create table PJ(
idPartie int,
idJoueurs int,
primary key(idPartie,idJoueurs),
constraint foreign key(idPartie) references Partie(id) on update restrict,
constraint foreign key(idJoueurs) references Joueurs(id) on update restrict
)engine InnoDB;

