let currentCard = null; 

const cardUrls = {
    'c1': 'product1.html',
    'c2': 'product2.html',
    'c3': 'product3.html'
};

// Function to handle card clicks
function handleCardClick(cardId) {
    if (currentCard === cardId) {
        window.location.href = cardUrls[cardId]; 
    } else {
        currentCard = cardId;
        console.log(`Selected card: ${cardId}`);
    }
}


document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        const cardId = card.getAttribute('for'); 
        handleCardClick(cardId);
    });
});