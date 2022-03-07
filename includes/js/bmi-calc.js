function calcNumbers() {
    var mass = document.getElementsByName("mass")[0].value;
    var height = document.getElementsByName("height")[0].value;
    var bmi_value = parseFloat(mass) / (parseFloat(height)/100)**2;
    document.getElementsByName("bmi_value")[0].value = bmi_value;
  } 