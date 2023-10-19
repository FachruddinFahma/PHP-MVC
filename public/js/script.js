document.addEventListener('DOMContentLoaded', function() {
    const listItems = document.querySelectorAll('.nav-sidebar li');

    listItems.forEach((item) => {
        item.addEventListener('click', () => {
            listItems.forEach((otherItem) => {
                otherItem.classList.remove('clicked');
            });
            item.classList.toggle('clicked');
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const arrowDetails = document.querySelectorAll('.nav-sidebar li details .arrow-detail');

    arrowDetails.forEach((arrowDetail) => {
        arrowDetail.addEventListener('click', function () {
            const currentRotation = arrowDetail.style.transform || 'rotate(180deg)';
            arrowDetail.style.transform = currentRotation === 'rotate(-90deg)' ? 'rotate(180deg)' : 'rotate(-90deg)';
        });
    });

    feather.replace();
});
