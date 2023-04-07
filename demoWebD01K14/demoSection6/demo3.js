<!--        Lay n va tinh -->
function tinh(){
    //    Khai bao n
    let n, result;
    //    Lay n
    n = parseInt(document.getElementById('n').value);
    //    Kiem tra n va tinh
    if(n % 2 == 0){
        result = n / 2;
    } else {
        result = n * 2;
    }
    //    In ket qua
    alert("result = " + result);
}