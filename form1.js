

 var database = firebase.database();

 var userRef = database.ref('scanning');

userRef.orderByChild("building").equalTo(STMB).once('value', function(snapshot){
//     console.log(snapshot.val());
// });


//firebase.database().ref().child("scanning").orderByChild("building").equalTo("STMB").once("value", function (snapshot) {        
    snapshot.forEach(function(childSnapshot) {

      var cellNum = childSnapshot.val().CellNum;  
      var name = childSnapshot.child("name").val();
      var email = childSnapshot.child("email").val();
      var phone = childSnapshot.child("mobile").val();
      var time = childSnapshot.child("classtime").val();
      var date = childSnapshot.child("date").val();
    var temperature = childSnapshot.child("temp").val(); 

      $("#table_body1").append('tr  td' + name +'/td td' + email + '/td td' + phone + '/td td' + time + '/td td ' + date + '/td td'  + temperature + '/td /tr');           
    });                

});