const WA_CONFIG = {
    number: '6285887639199', // Ganti dengan nomor Anda
    defaultMessage: 'Saya ingin konsultasi tentang canopy, Terimakasih.',
    notlp: '0858-8763-9199',
    email: 'rizkiabadicanopy@gmail.com',
    workshop: 'Sukabumi - Bogor - Jakarta - Bandung - Depok - Tangerang - Serang - dan sekitarnya',
    jam_oprasional: '08:00 - 17:00 (Senin - Minggu)',
    sapa: 'Rizki Abadi Canopy'
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
    const encodedMessage = encodeURIComponent(WA_CONFIG.sapa + ', ' + message || WA_CONFIG.defaultMessage);
    window.open(`https://wa.me/${WA_CONFIG.number}?text=${encodedMessage}`, '_blank');
}

document.addEventListener('DOMContentLoaded', function() {

            // ===== 1. ISI DATA DARI CONFIG =====
            document.getElementById('waDisplay').textContent = WA_CONFIG.notlp;
    alert(WA_CONFIG.notlp);
            document.getElementById('emailDisplay').textContent = WA_CONFIG.email;
            document.getElementById('phoneDisplay').textContent = WA_CONFIG.notlp;
            document.getElementById('jamDisplay').textContent = WA_CONFIG.jam_oprasional;
            document.getElementById('workshopDisplay').textContent = WA_CONFIG.workshop;
            document.getElementById('companyDisplay').textContent = WA_CONFIG.sapa;

});
