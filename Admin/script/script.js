function bold(){

    document.getElementById("textarea1").style.fontWeight="bold";
  
  }
  function italic(){
  
    document.getElementById("textarea1").style.fontStyle = "italic";
  
  }
  function left_alignment(){
  
    document.getElementById("textarea1").style.textAlign = "left";
  
  }
  function center_alignment(){
  
    document.getElementById("textarea1").style.textAlign = "center";
  
  }
  function right_alignment(){
  
    document.getElementById("textarea1").style.textAlign = "right";
  
  }
  
  function upper_text(){
  
    document.getElementById("textarea1").style.textTransform = "uppercase";
  
  }
  function lower_text(){
  
    document.getElementById("textarea1").style.textTransform = "lowercase";
  
  }
  function captalize_text(){
  
    document.getElementById("textarea1").style.textTransform = "capitalize";
  
  }
  function clear_text(){
  
    document.getElementById("textarea1").style.fontWeight = "normal";
    document.getElementById("textarea1").style.textAlign = "left";
    document.getElementById("textarea1").style.fontStyle = "normal";
    document.getElementById("textarea1").style.textTransform = "capitalize";
    document.getElementById("textarea1").value=" ";
  
  
  
  }
  
  function download() {
    const content = document.getElementById("textarea1").value;
    var save = document.createElement("a");
    save.setAttribute("href", "data:text/plain;charset=umenttttf-8," + encodeURI(content));
    save.setAttribute("download", content.slice(0, 17) + ".txt");
  
    document.body.appendChild(save);
    save.click();
    document.body.removeChild(save);
  }