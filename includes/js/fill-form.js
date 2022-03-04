{
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var cloaseb = document.getElementsByClassName("close")[0];
    
    
    btn.onclick = function() {
      modal.style.display = "block";
      document.body.style.overflow = 'hidden';
    
    }
    
    cloaseb.onclick = function() {
      modal.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
    }
    
    {
    var modal1 = document.getElementById("myModal1");
    var btn1 = document.getElementById("myBtn1");
    var span = document.getElementsByClassName("close1")[0];
    
    
    btn1.onclick = function() {
      modal1.style.display = "block";
      document.body.style.overflow = 'hidden';
    }
    
    span.onclick = function() {
      modal1.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
    
    }
    
    {
    var modal2 = document.getElementById("myModal2");
    var btn2 = document.getElementById("myBtn2");
    var span = document.getElementsByClassName("close2")[0];
    
    
    btn2.onclick = function() {
      modal2.style.display = "block";
      document.body.style.overflow = 'hidden';
    
    }
    
    span.onclick = function() {
      modal2.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
    
    }
    /*fit-hit only */

{
  var modal3 = document.getElementById("myModal3");
  var btn3 = document.getElementById("myBtn3");
  var span = document.getElementsByClassName("close3")[0];
  
  
  btn3.onclick = function() {
    modal3.style.display = "block";
    document.body.style.overflow = 'hidden';
    
  }
  
  span.onclick = function() {
    modal3.style.display = "none";
    document.body.style.overflow = 'scroll';
  }
  
  }

{
    var modal4 = document.getElementById("myModal4");
    var btn4 = document.getElementById("myBtn4");
    var span = document.getElementsByClassName("close4")[0];
    
    
    btn4.onclick = function() {
      modal4.style.display = "block";
      document.body.style.overflow = 'hidden';
      
    }
    
    span.onclick = function() {
      modal4.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
    
}

{
    var modal5 = document.getElementById("myModal5");
    var btn5 = document.getElementById("myBtn5");
    var span = document.getElementsByClassName("close5")[0];
    
    
    btn5.onclick = function() {
      modal5.style.display = "block";
      document.body.style.overflow = 'hidden';
      
    }
    
    span.onclick = function() {
      modal5.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
      
}


{
  var modal6 = document.getElementById("myModal6");
  var btn6 = document.getElementById("myBtn6");
  var span = document.getElementsByClassName("close6")[0];
  
  
  btn6.onclick = function() {
    modal6.style.display = "block";
    document.body.style.overflow = 'hidden';
    
  }
  
  span.onclick = function() {
    modal6.style.display = "none";
    document.body.style.overflow = 'scroll';
  }
    
}


{        
  var windowObjectReference = null; // global variable
        
    function openRequestedPopup(url, windowName) {
      if(windowObjectReference == null || windowObjectReference.closed) {
        windowObjectReference = window.open(url, windowName, "popup");
      } else {
        windowObjectReference.focus();
      };
    }

}