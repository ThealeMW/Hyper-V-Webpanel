$(document).ready(function() {
if(window.location == "http://localhost/dashboard.php"){
toastr.options = {
"closeButton": true,
"debug": false,
"progressBar": true,
"preventDuplicates": true,
"positionClass": "toast-top-right",
"onclick": null,
"showDuration": "400",
"hideDuration": "1000",
"timeOut": "7000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}
toastr.info("Welcome to MOVServer.info | VPS-Panel")  
}
});        
