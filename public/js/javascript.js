//Update the status of the in progress meetings

var delay; //delay counter seconds;
var tid1 = setInterval(calculateTime1, 60000);
var tid2 = setInterval(calculateTime2, 60000);

function calculateTime1() {    
    var duration1 = parseInt($('span#duration.pb-room1').html());
    var running1 = parseInt($('span#running.pb-room1').html());      
    running1 += 1;
    $('span#running.pb-room1').html(running1);        
    if (running1 == duration1){
        clearTimeout(tid1);
        $('div#progress-bar-room1').addClass('progress-bar-success');  
        $('span#status-room1').html('Finished'); 
        setTimeout(function(){ location.reload();},5000);       
    }
    $('div#progress-bar-room1').css('width', (running1 * 100 / duration1) + '%');    
}

function calculateTime2() {    
    var duration2 = parseInt($('span#duration.pb-room2').html());
    var running2 = parseInt($('span#running.pb-room2').html());      
    running2 += 1;
    $('span#running.pb-room2').html(running2);        
    if (running2 == duration2){
        clearTimeout(tid2);
        $('div#progress-bar-room2').addClass('progress-bar-success');        
        $('span#status-room2').html('Finished');        
        setTimeout(function(){ location.reload();},5000);
    }
    $('div#progress-bar-room2').css('width', (running2 * 100 / duration2) + '%');    
}

function refresh(val){
    
}