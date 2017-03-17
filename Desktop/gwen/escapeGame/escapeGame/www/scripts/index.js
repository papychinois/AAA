// Pour obtenir une présentation du modèle Vide, consultez la documentation suivante :
// http://go.microsoft.com/fwlink/?LinkID=397704
// Pour déboguer du code durant le chargement d'une page dans Ripple ou sur les appareils/émulateurs Android, lancez votre application, définissez des points d'arrêt, 
// puis exécutez "window.location.reload()" dans la console JavaScript.
(function () {
    "use strict";

    document.addEventListener( 'deviceready', onDeviceReady.bind( this ), false );

    function onDeviceReady() {
        // Gérer les événements de suspension et de reprise Cordova
        document.addEventListener('pause', onPause.bind(this), false);
        document.addEventListener('resume', onResume.bind(this), false);c:\users\frin\desktop\escapegame\escapegame\plugins\
        document.addEventListener("backbutton", onBackKeyDown, false);
        var myButton = document.getElementById("btn");
        myButton.addEventListener("click", clicked, false);

        // TODO: Cordova a été chargé. Effectuez l'initialisation qui nécessite Cordova ici.
    };
    function onBackKeyDown() {
        navigator.app.exitApp();
    };

    function onPause() {
        // TODO: cette application a été suspendue. Enregistrez l'état de l'application ici.

    };

    function clicked() {
        /*window.open('http://localhost:8080/getuser.php', '_self', 'location=yes', 'hardwareback=yes');
        var ref = cordova.InAppBrowser.open('http://localhost:808/getuser.php', '_self', 'hidden=yes');
        ref.show();*/
    };

    function onResume() {
        // TODO: cette application a été réactivée. Restaurez l'état de l'application ici.
    };

    $(".titre").click(function(event){$.mobile.changePage("#Config");});
} )();