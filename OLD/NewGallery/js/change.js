
onClick = "getIndex(this);"

function getIndex(node) {
  console.log("sid check scroll test");
// abcd()
window.scroll({
  top: 0,
  left: 0,
  behavior: 'smooth'
});
console.log("sid after scroll check")
  // console.log(node.value)
  // var childs = node.childNodes;
  // for (i = 0; i < childs.length; i++) {
  //   if (node == childs[i]) break;
  //   console.log(`loop ${i}`)
  // }
  // console.log(childs)

globalpiece = node.value -1;
document.getElementById("changerButton").click();

}
