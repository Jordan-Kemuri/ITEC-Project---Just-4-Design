function showLogin() {
  document.getElementById("login").style.display = "block";
  document.getElementById("register").style.display = "none";
  }

  function showSignUp() {
    document.getElementById("register").style.display = "block";
    document.getElementById("login").style.display = "none";
    }

  function hideElements(){
    document.getElementById("register").style.display = "none";
  }
function getimages(name){
  var url = new URL("http://localhost/ITEC/product.php");
      url.searchParams.set('name',name);
      window.location.href= url;
      

}