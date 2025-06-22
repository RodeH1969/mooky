<?php
/*
Template Name: Yoolookee Prize Page
*/
get_header();
?>

<div class="yoolookee-container">
    <h1 class="yoolookee-title">Yoolookee's Quesadilla Prize</h1>
    <p class="yoolookee-subtitle">Celebrating Flavor with a Purpose</p>
    <div class="prize-content">
        <p>Yoolookee is excited to donate a delicious quesadilla as a winning prize! Join us in spreading joy and flavor through this special giveaway, bringing smiles one bite at a time.</p>
        <a href="https://yoolookee.com.au" target="_blank" class="yoolookee-button">Learn More</a>
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

.yoolookee-container {
    text-align: center;
    padding: 40px 20px;
    max-width: 800px;
    margin: 0 auto;
}

.yoolookee-title {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.yoolookee-subtitle {
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

.yoolookee-button {
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

.yoolookee-button:hover {
    background-color: #c0392b;
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .yoolookee-title {
        font-size: 36px;
    }

    .yoolookee-subtitle {
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