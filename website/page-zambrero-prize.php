<?php
/*
Template Name: Zambrero Prize Page
*/
get_header();
?>

<div class="zambrero-container">
    <h1 class="zambrero-title">Zambrero's Quesadilla Prize</h1>
    <p class="zambrero-subtitle">Celebrating Feel Good Mex with a Heart</p>
    <div class="prize-content">
        <p>Zambrero is thrilled to donate a delicious quesadilla as a winning prize! Join us in spreading joy and flavor while supporting our Plate 4 Plate initiative, where every burrito or bowl purchased donates a meal to someone in need.</p>
        <a href="https://zambrero.com.au" target="_blank" class="zambrero-button">Learn More</a>
    </div>
</div>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(180deg, #1a1a1a 0%, #121212 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
}

.zambrero-container {
    text-align: center;
    padding: 40px 20px;
    max-width: 800px;
    margin: 0 auto;
}

.zambrero-title {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.zambrero-subtitle {
    font-size: 24px;
    font-weight: 400;
    margin-bottom: 30px;
    color: #cccccc;
}

.prize-content {
    font-size: 18px;
    line-height: 1.6;
    color: #dddddd;
}

.prize-content p {
    margin-bottom: 30px;
}

.zambrero-button {
    display: inline-block;
    padding: 12px 24px;
    background-color: #e84c3d;
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.zambrero-button:hover {
    background-color: #c0392b;
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .zambrero-title {
        font-size: 36px;
    }

    .zambrero-subtitle {
        font-size: 20px;
    }

    .prize-content {
        font-size: 16px;
    }
}
</style>

<?php
get_footer();
?>