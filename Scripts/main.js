const btnUpdate = document.getElementById('editBtn');

if (btnUpdate) {
    btnUpdate.addEventListener('click', () => {
        const form = document.getElementById('editForm');
        form.classList.toggle('activeds');
        console.log('clicked')
    });
}
