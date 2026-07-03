const WA_CONFIG = {
    number: '6285887639199', // Ganti dengan nomor Anda
    defaultMessage: 'Halo Rizki Abadi Canopy, saya ingin konsultasi tentang canopy, Terimakasih.'
};

async function loadFile(file, elementId) {
    const element = document.getElementById(elementId);

    if (!element) {
        console.warn(`Element #${elementId} tidak ditemukan`);
        return;
    }

    try {
        const response = await fetch(file);

        if (!response.ok) {
            throw new Error(`Gagal memuat ${file} (${response.status})`);
        }

        element.innerHTML = await response.text();
    } catch (err) {
        console.error(err);
    }
}

document.addEventListener("DOMContentLoaded", async () => {
    await Promise.all([
        loadFile("/shared/header.html", "header"),
        loadFile("/shared/footer.html", "footer")
    ]);
});

function openWhatsApp(message) {
    const encodedMessage = encodeURIComponent(message || WA_CONFIG.defaultMessage);
    window.open(`https://wa.me/${WA_CONFIG.number}?text=${encodedMessage}`, '_blank');
}
