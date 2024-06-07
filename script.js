let slideIndex = 0;
let slideInterval;

function showSlides() {
    const slides = document.querySelectorAll('.carousel-item');
    const dots = document.querySelectorAll('.dot');
    
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active');
    }
    slides[slideIndex].style.display = 'block';
    dots[slideIndex].classList.add('active');
}

function nextSlide() {
    slideIndex++;
    showSlides();
}

function currentSlide(n) {
    slideIndex = n;
    showSlides();
}

const slides = document.querySelectorAll('.carousel-item');

// Generate dots
const dotsContainer = document.querySelector('.dots-container');
slides.forEach((_, index) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    dot.setAttribute('onclick', `currentSlide(${index})`);
    dotsContainer.appendChild(dot);
});

function startSlideInterval() {
    slideInterval = setInterval(() => {
        nextSlide();
    }, 2500); // Ganti slide setiap 3 detik
}

function stopSlideInterval() {
    clearInterval(slideInterval);
}

// Start slide interval
startSlideInterval();

// Pause slide interval when cursor is over carousel
document.querySelector('.carousel-container').addEventListener('mouseenter', () => {
    stopSlideInterval();
});

// Resume slide interval when cursor leaves carousel
document.querySelector('.carousel-container').addEventListener('mouseleave', () => {
    startSlideInterval();
});

showSlides();

function toggleVisibility() {
    var element = document.getElementById("myElement");
    element.classList.toggle("visible");
}

// Mendapatkan elemen tombol untuk membuka dan menutup popup
const openPopupBtn = document.getElementById("open-popup-btn");
const closePopupBtn = document.getElementById("close-popup-btn");

// Mendapatkan elemen popup
const popup = document.getElementById("popup");

// Fungsi untuk membuka popup
function openPopup() {
    popup.style.display = 'flex';
}

// Fungsi untuk menutup popup
function closePopup() {
    popup.style.display = 'none';
}

// Menambahkan event listener ke tombol buka pop-up
openPopupBtn.addEventListener("click", openPopup);

// Menambahkan event listener ke tombol tutup pop-up
closePopupBtn.addEventListener("click", closePopup);

// Mendapatkan elemen tombol "Baca Selengkapnya"
const readMoreBtn = document.querySelector('.popup-content a .popup-close');

// Fungsi promise untuk mensimulasikan tugas sebelum membuka tautan
function prepareToReadMore() {
    return new Promise((resolve, reject) => {
        // Simulasi waktu tunggu (misalnya, 2 detik) untuk menjalankan tugas
        setTimeout(() => {
            // Misalnya, simulasi tugas berhasil
            const isSuccess = true;

            if (isSuccess) {
                resolve(); // Simulasi hasil sukses
            } else {
                reject(new Error("Terjadi kesalahan sebelum membuka tautan."));
            }
        }, 2000); // Waktu tunggu yang disimulasikan
    });
}

// Fungsi asynchronous untuk menangani klik tombol "Baca Selengkapnya"
async function handleReadMoreButtonClick(event) {
    event.preventDefault(); // Mencegah tindakan default tombol (pindah ke tautan)

    try {
        // Simulasikan tugas sebelum membuka tautan
        await prepareToReadMore();
        
        // Jika tugas berhasil, buka tautan ke "Berita1.html"
        window.location.href = "Berita1.html";
    } catch (error) {
        // Tangani kesalahan jika ada
        alert(`Terjadi kesalahan: ${error.message}`);
    }
}

// Menambahkan event listener ke tombol "Baca Selengkapnya"
readMoreBtn.addEventListener("click", handleReadMoreButtonClick);