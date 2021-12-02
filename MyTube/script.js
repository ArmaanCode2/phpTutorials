function bt(){
    const one = document.getElementById("inp1").value;
    const two = document.getElementById("inp2").value;
    const three = document.getElementById("bt");
    const o = one;
    const t = two;
    localStorage.setItem(o, t);
    window.location.reload();
    }