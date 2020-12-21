function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";

    document.body.style.backgroundColor = "white";
  }



  //todo code
  var comment = true;
function AddList(){
    var x = document.getElementById('input-todo').value;
    var d = document.getElementById('date').value;
    console.log("this id d:",d);
    if(x.length < 3){
        document.getElementById('input-todo').value = 'Too low !';
    }else if(x.length > 50){
        document.getElementById('input-todo').value = 'Too big !';
    }else{
        //let d = new Date();
        comment = !comment;
        $.ajax({
            url: "addtodo.php",
            type: "POST",
            data: {
                date: d,
                task: x,	
       },
       success: function (data) {
        console.log('data: '+data);
       },
    
            error: function(error) {
            console.log('Error: ' + error);
       }
          });
        d1 = new Date();
        document.getElementById('list').innerHTML += (
            `<div class='${comment ? 'list' : 'list-2'}' onclick='this.style.textDecoration = "line-through"'>
                <button class='cancel' onclick='this.parentElement.style.display = "none";'>×</button>
                <span class='text'>${x} at : ${d1.getHours()}:${d1.getMinutes()}</span>
            </div>`
        );
        document.getElementById('input-todo').value = '';
    }
}
/*Onclick add btn*/
document.getElementById('btn-send-todo').onclick = AddList;

function Removetodo1(task,i)
{

  console.log(task);

  $.ajax({
      url: "Removetodo.php",
      type: "POST",
      data: {
        task: task,
      },
      success: function (data) {
        console.log('data: '+data);
      },
      
      error: function(error) {
        console.log('Error: ' + error);
      }
    });
    document.getElementById(`demo${i}`).style.display = "none";


}
function Removetodo2(task,i)
{

  console.log(task);

  $.ajax({
      url: "Removetodo.php",
      type: "POST",
      data: {
        task: task,
      },
      success: function (data) {
        console.log('data: '+data);
      },
      
      error: function(error) {
        console.log('Error: ' + error);
      }
    });
    document.getElementById(`dem${i}`).style.display = "none";


}