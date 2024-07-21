
// ページが読み込まれたときにポップアップを表示
window.onload = function() {
    var modal = document.getElementById('myModal');
    modal.style.display = "block";
}

// 閉じるボタンまたはモーダル外のクリックでモーダルを非表示にする
var closeBtn = document.getElementsByClassName("close")[0];
closeBtn.onclick = function() {
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
}

window.onclick = function(event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}