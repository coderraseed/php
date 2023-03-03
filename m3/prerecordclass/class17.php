<?php 
//Big Function to small function

function doTheLargerTask(){
    echo "Step A done \n";
    echo "Step B done \n";
    echo "Step C done \n";
    echo "Step D done \n";
    echo "Step E done \n";
    echo "Step F done \n";
    echo "Step G done \n";
}
doTheLargerTask();
echo "=================\n";
//Now cut the big function to small function
function taskA(){
    echo "Step A done \n";
}
function taskB(){
    echo "Step B done \n";
}
function taskC(){
    echo "Step C done \n";
}
function taskD(){
    echo "Step D done \n";
}
function taskE(){
    echo "Step E done \n";
}
function taskF(){
    echo "Step F done \n";
}
function taskG(){
    echo "Step G done \n";
}

function doSmall(){
    taskA();
    taskB();
    taskC();
    taskD();
    taskE();
    taskF();
    taskG();
    
}
doSmall();