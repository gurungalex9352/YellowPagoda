function storeData(){
    var check_in_date = document.getElementById('check-in').value;
    var check_out_date = document.getElementById('check-out').value;
    var total_count = parseInt(document.getElementById('adult-count').value) + parseInt(document.getElementById('child-count').value);    
   
    localStorage.setItem('check_in_date', check_in_date);
    localStorage.setItem('check_out_date', check_out_date);
    localStorage.setItem('total_count', total_count);

}

function setTodaysDate() {
    document.getElementById('check-in').valueAsDate = new Date();
             
}

function setTommorrowDate(){
    // const tomorrow = new Date(today)
    // tomorrow.setDate(tomorrow.getDate() + 1)

    // document.getElementById('check-out').valueAsDate = tomorrow;

    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1); // even 32 is acceptable
    document.getElementById('check-out').valueAsDate = `${tomorrow.getFullYear()}/${tomorrow.getMonth() + 1}/${tomorrow.getDate()}`;

}