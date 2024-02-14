function addTask(){
    var taskTitle = document.getElementById("taskName").value;
    var  taskDescription = document.getElementById("taskDescription").value; 
    
    if(taskTitle == "" || taskDescription == ""){
        alert('Please fill out all fields');
        // return false;
    }
    else{
        alert('Done the task');
    }
    
}
