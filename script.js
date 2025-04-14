function toggleMenu() {
    var menu = document.getElementById('menu');
    if (menu.style.display === 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }
}

document.getElementById("myForm").addEventListener('submit',function(event) {
    event.preventDefault();//prevent the form from actually submitting

    //show the popup
    var popup=document.getElementById('popup');
    popup.style.display='block';

    //close the popup when the close button is clicked
    document.getElementById('closePopup').addEventListener('click',function() {
        popup.style.display='none';
    });
  });
