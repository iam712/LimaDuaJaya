<!-- resources/views/components/_whatsapp_fab.blade.php -->

<div class="whatsapp-fab">
    <a href="https://wa.me/6282115983575" target="_blank" class="whatsapp-button">
        <i class="fab fa-whatsapp"></i> <!-- Font Awesome icon for WhatsApp -->
    </a>
</div>

<style>
.whatsapp-fab {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 100;
}

.whatsapp-button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 66px;
    height: 66px;
    background-color: #25D366; /* WhatsApp green */
    border-radius: 50%;
    color: #fff;
    text-decoration: none;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    font-size: 24px;
}

.whatsapp-button:hover {
    background-color: #128C7E; /* Darker shade on hover */
}
</style>
