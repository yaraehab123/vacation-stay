function test(){
   alert("visitor's info saved")
}
function share(){
    var shareData={
        url:document.location.href
}
if(Navigator.canshare(shareData)){
    navigator.share(sharaData);
}
}