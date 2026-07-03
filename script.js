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
        loadFile("./shared/header.html", "header"),
        loadFile("./shared/footer.html", "footer")
    ]);
});
