//all variable 
let theinput = document.querySelector(".add-task input");
let theplus = document.querySelector(".add-task .plus");
let containertask = document.querySelector(".tasks-content ");
let notask = document.querySelector(".no-tasks-message");
let taskcontent = document.querySelector(".task-stats .tasks-count");
let taskcomplet = document.querySelector(".task-stats .tasks-completed");
let addtask = document.querySelector(".add-task ");

//focus on input
window.onload = theinput.focus();

// add task botton
theplus.onclick = function () {

  // if no value on input or ther is value
  if (theinput.value === "") {

    // Check if the error message already exists
    let existingError = document.querySelector(".todo-container .add-task .message-erreur");
    if (!existingError) {
      // create  msg span
      let msgspan = document.createElement("span");

      //create text
      let txtmsg = document.createTextNode("enter un valeur !!!");

      //add text to span
      msgspan.appendChild(txtmsg);

      //class name of msg span
      msgspan.className = "message-erreur";

      //add msg error to to add-task 
      addtask.appendChild(msgspan);
    }
  }
  else {
    //remove no task
    notask.remove();

    // create main span
    let mainspan = document.createElement("span");

    //crete delete botton
    let deletebotton = document.createElement("span");

    // text for span
    let text = document.createTextNode(theinput.value);

    //text for delet botton
    let textdelet = document.createTextNode("delete");

    //add text to delet botton
    deletebotton.appendChild(textdelet);

    // add text to main span
    mainspan.appendChild(text);

    //add class to main span
    mainspan.className = 'task-box';

    //add class to delet botoon
    deletebotton.className = 'delete';

    //add delet botton to main span
    mainspan.appendChild(deletebotton);

    //add the task to the containe
    containertask.appendChild(mainspan);

    //for msg error
    // If there is a value in the input, remove the error message if it exists
    let existingError = document.querySelector(".todo-container .add-task .message-erreur");
    if (existingError) {
      existingError.remove();
    }
  }
}

// function for delet
document.addEventListener('click', function (e) {
  if (e.target.className == 'delete') {
    e.target.parentElement.remove();
  }

  if (e.target.classList.contains("task-box")) {
    e.target.classList.toggle('finished');
  }
});

