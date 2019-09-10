// xác định các đối tượng thao tác
var _paragraph =document.getElementById('paragraph');
var _btnchangColor = document.getElementById('btnchangecolor');
var node= document.createTextNode("a")
var _newnode= document.createElement('img')
// xử lý sự kiện click chouto vaog thì btnChangeColor
_btnchangColor.addEventListener('click', function(){
    _paragraph.style.color="green";
    _paragraph.style.fontFamily="Arial";
    _paragraph.style.fontSize="40px";
    _newnode.src="anh1.jpg";
    _paragraph.appendChild(_newnode);
    //(css) font-size==> fontSize(JavaScript)
})