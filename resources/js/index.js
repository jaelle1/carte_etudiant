import  jspdf  from "jspdf";



// $(document).ready(function () {
//     var text = $("#contain");

//     $("#downloadPDF").click(function () {
//         var doc = new jspdf("l","px", "a3");
//         doc.html(text,{
//             callback: function(doc){
// doc.save("file.pdf");
//             }
//         })

        
//     });
// });

let carte = document.getElementById('contain');
let buttoncard= document.getElementById("downloadPDF");
function impression(){
    let doc = new jspdf("l", "px", "a3");
    doc.html(carte, {
        callback: function(doc) {
            doc.save("carte.pdf");
        }
    })
}
buttoncard.addEventListener("click", impression);
