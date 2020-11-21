function send() {
                if (document.forms.form.kebutuhan.value=="") {
                    document.getElementById("kebutuhan1").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("kebutuhan2").style.border="2px solid  rgb(255, 53, 53)";
                    return false;
                }
                if(document.forms.form.komplek.value==""){
                    document.getElementById("komplek1").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("komplek2").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("komplek3").style.border="2px solid  rgb(255, 53, 53)";
                    return false;
                }
                if(document.forms.form.waktu.value==""){
                    document.getElementById("waktu1").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("waktu2").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("waktu3").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("waktu4").style.border="2px solid  rgb(255, 53, 53)";
                    return false;
                }
                if(document.forms.form.orang.value==""){
                    document.getElementById("orang1").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("orang2").style.border="2px solid  rgb(255, 53, 53)";
                    return false;
                }
                if(document.forms.form.kemampuan.value==""){
                    document.getElementById("kemampuan1").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("kemampuan2").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("kemampuan3").style.border="2px solid  rgb(255, 53, 53)";
                    return false;
                }
                if(document.forms.form.klien.value==""){
                    document.getElementById("klien1").style.border="2px solid  rgb(255, 53, 53)";
                    document.getElementById("klien2").style.border="2px solid  rgb(255, 53, 53)";
                    return false;
                }
                return true;
            }
function reset_msg_kebutuhan() {
    document.getElementById("kebutuhan1").style.border="";
    document.getElementById("kebutuhan2").style.border="";
}
function reset_msg_komplek() {
    document.getElementById("komplek1").style.border="";
    document.getElementById("komplek2").style.border="";
    document.getElementById("komplek3").style.border="";
}
function reset_msg_waktu(){
    document.getElementById("waktu1").style.border="";
    document.getElementById("waktu2").style.border="";
    document.getElementById("waktu3").style.border="";
    document.getElementById("waktu4").style.border="";
}
function reset_msg_orang(){
    document.getElementById("orang1").style.border="";
    document.getElementById("orang2").style.border="";
}
function reset_msg_kemampuan() {
    document.getElementById("kemampuan1").style.border="";
    document.getElementById("kemampuan2").style.border="";
    document.getElementById("kemampuan3").style.border="";
}
function reset_msg_klien(){
    document.getElementById("klien1").style.border="";
    document.getElementById("klien2").style.border="";
}

