@aware(['page'])
<footer class="footer-bg text-gray-300 py-12 w-full" id="footer">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">

            <div>
                <img src="{{ asset('storage/' . $page->blocks[2]['data']['image']) }}" alt="Logo Pacifico Advocacia"
                    class="h-12 mb-4 opacity-80"
                    onerror="this.onerror=null;this.src='https://placehold.co/100x50/0A2A4D/FFFFFF?text=Logo';">
                <p class="text-sm">Pacifico Saldanha & Advogados Associados.</p>
                <p class="text-sm">Rua Quinze de Novembro, 1402 - Centro, Uruguaiana - RS</p>
                <p class="text-sm">CEP: 97500-510</p>
            </div>
            <div>
                <h5 class="text-lg font-semibold text-white mb-4">Links Rápidos</h5>
                <ul>
                    <li class="mb-2"><a href="#sobre" class="hover:text-white">Sobre Nós</a></li>
                    <li class="mb-2"><a href="#servicos" class="hover:text-white">Áreas de Atuação</a></li>
                    <li class="mb-2"><a href="#publicacoes" class="hover:text-white">Publicações</a></li>
                    <li class="mb-2"><a href="#contato" class="hover:text-white">Contato</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-white">Política de Privacidade</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-lg font-semibold text-white mb-4">Siga-nos</h5>
                <div class="flex space-x-4">
                    <a href="{{$page->blocks[1]['data']['instagram']}}" target="_blank" class="social-icon"
                        aria-label="Instagram">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4A3.6,3.6 0 0,0 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6A3.6,3.6 0 0,0 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                        </svg>
                    </a>
                    <a href="{{$page->blocks[1]['data']['facebook']}}" target="_blank" class="social-icon"
                        aria-label="Facebook">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 2.04C6.48 2.04 2 6.52 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.81C10.44 7.31 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.52 17.52 2.04 12 2.04Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 pt-8 text-center text-sm">
            <p>© <span id="currentYear"></span> Pacifico Saldanha & Advogados Associados. Todos os direitos reservados.
            </p>
            <p>Desenvolvido com <span class="secondary-color">♥</span></p>
        </div>
    </div>
</footer>

<button id="openWhatsAppModalBtn"
    class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg z-40 transition-transform hover:scale-110">
    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
        <path
            d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.33 3.43 16.79L2.05 22L7.31 20.5C8.75 21.31 10.36 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 9.31 20.95 6.91 19.21 5.18C17.48 3.44 15.08 2 12.04 2M12.04 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.43 7.65 20.29 9.72 20.29 11.91C20.29 16.47 16.63 20.13 12.04 20.13C10.52 20.13 9.08 19.72 7.82 19L7.43 18.78L4.73 19.53L5.5 16.89L5.27 16.5C4.42 15.18 3.79 13.59 3.79 11.91C3.79 7.35 7.45 3.67 12.04 3.67M9.12 7.71L8.09 7.72C7.58 7.72 7.13 7.79 6.79 7.9L6.73 7.92C6.44 8.04 6.14 8.24 5.91 8.5C5.64 8.79 5.46 9.12 5.38 9.32C5.29 9.52 5.24 9.86 5.26 10.28C5.29 10.71 5.41 11.11 5.59 11.43C5.73 11.69 5.96 12.03 6.3 12.5C6.81 13.17 7.41 13.91 8.12 14.7C9.22 15.9 10.12 16.63 10.92 17.09C11.21 17.25 11.51 17.37 11.83 17.46C12.2 17.56 12.53 17.58 12.81 17.53C13.21 17.46 13.61 17.26 13.91 16.93C14.25 16.56 14.46 16.12 14.53 15.78C14.61 15.42 14.62 15.04 14.56 14.65L14.45 13.8L13.76 13.52C13.53 13.41 13.25 13.34 12.93 13.46C12.62 13.58 12.42 13.82 12.21 14.16C12.02 14.48 11.85 14.62 11.62 14.72C11.39 14.82 11.18 14.82 10.96 14.7C10.75 14.58 10.29 14.32 9.71 13.7C9.02 12.98 8.53 12.21 8.29 11.78C8.2 11.58 8.12 11.39 8.14 11.19C8.16 10.99 8.26 10.82 8.41 10.67C8.55 10.52 8.71 10.41 8.88 10.35C9.05 10.28 9.21 10.28 9.35 10.32L10.06 10.5H10.18L10.1 9.74C10.06 9.39 9.93 9.03 9.76 8.7C9.62 8.42 9.4 8.17 9.12 7.99V7.98L9.12 7.71Z" />
    </svg>
</button>

<div id="whatsAppModal" class="fixed inset-0 modal-backdrop items-center justify-center z-50 hidden">
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-2xl w-11/12 md:w-1/2 lg:w-1/3 modal-content overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-semibold primary-color">Contato via WhatsApp</h3>
            <button id="closeWhatsAppModalBtn" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
        </div>
        <form id="whatsAppForm">
            <div class="mb-4">
                <label for="whatsappSubject" class="block text-sm font-medium text-gray-700 mb-1">Assunto:</label>
                <input type="text" id="whatsappSubject" name="whatsappSubject"
                    class="w-full p-3 border border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Ex: Consulta sobre Direito Civil" required>
            </div>
            <div class="mb-6">
                <label for="whatsappMessage" class="block text-sm font-medium text-gray-700 mb-1">Mensagem:</label>
                <textarea id="whatsappMessage" name="whatsappMessage" rows="4"
                    class="w-full p-3 border border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Digite sua mensagem aqui..." required></textarea>
            </div>
            <button type="submit"
                class="w-full btn-primary py-3 px-6 rounded-lg text-lg font-semibold hover:shadow-lg transition duration-300">
                Enviar Mensagem
            </button>
        </form>
    </div>
</div>

<script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Set current year in footer
    const currentYearElement = document.getElementById('currentYear');
    if (currentYearElement) {
        currentYearElement.textContent = new Date().getFullYear();
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#') && href.length > 1) {
                e.preventDefault();
                const targetId = href;
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    let offset = 0;
                    const headerNav = document.getElementById('header-nav');
                    if (targetId !== '#initial-hero' && headerNav && headerNav.classList.contains(
                            'sticky')) {
                        offset = headerNav.offsetHeight;
                    }

                    const elementPosition = targetElement.getBoundingClientRect().top + window
                        .pageYOffset;
                    const offsetPosition = elementPosition - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            }
        });
    });


    

    // WhatsApp Modal Logic
    const whatsAppModal = document.getElementById('whatsAppModal');
    const openWhatsAppModalBtn = document.getElementById('openWhatsAppModalBtn');
    const closeWhatsAppModalBtn = document.getElementById('closeWhatsAppModalBtn');
    const whatsAppForm = document.getElementById('whatsAppForm');

    const openModalBtnHeader = document.getElementById('openModalBtnHeader');
    const openModalBtnMobile = document.getElementById('openModalBtnMobile');
    const openModalBtnContentHero = document.getElementById('openModalBtnContentHero');

    const yourWhatsAppNumber = "5511999999999"; // SUBSTITUA PELO SEU NÚMERO DE WHATSAPP COM CÓDIGO DO PAÍS

    function openModal() {
        if (whatsAppModal) {
            whatsAppModal.classList.remove('hidden');
            whatsAppModal.classList.add('flex');
        }
    }

    function closeModal() {
        if (whatsAppModal) {
            whatsAppModal.classList.add('hidden');
            whatsAppModal.classList.remove('flex');
        }
    }

    if (openWhatsAppModalBtn) openWhatsAppModalBtn.addEventListener('click', openModal);
    if (openModalBtnHeader) openModalBtnHeader.addEventListener('click', (e) => {
        e.preventDefault();
        openModal();
    });
    if (openModalBtnMobile) openModalBtnMobile.addEventListener('click', (e) => {
        e.preventDefault();
        openModal();
    });
    if (openModalBtnContentHero) openModalBtnContentHero.addEventListener('click', (e) => {
        e.preventDefault();
        openModal();
    });
    if (closeWhatsAppModalBtn) closeWhatsAppModalBtn.addEventListener('click', closeModal);

    if (whatsAppForm) {
        whatsAppForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const subjectInput = document.getElementById('whatsappSubject');
            const messageInput = document.getElementById('whatsappMessage');

            if (!subjectInput || !messageInput) return;

            const subject = subjectInput.value;
            const message = messageInput.value;

            if (!yourWhatsAppNumber || yourWhatsAppNumber === "SEUNUMEROWHATSAPP" || yourWhatsAppNumber
            .trim() === "") {
                const alertDiv = document.createElement('div');
                alertDiv.style.position = 'fixed';
                alertDiv.style.top = '20px';
                alertDiv.style.left = '50%';
                alertDiv.style.transform = 'translateX(-50%)';
                alertDiv.style.backgroundColor = 'red';
                alertDiv.style.color = 'white';
                alertDiv.style.padding = '15px';
                alertDiv.style.borderRadius = '8px';
                alertDiv.style.zIndex = '1000';
                alertDiv.textContent = 'Número do WhatsApp não configurado. Por favor, edite o código.';
                document.body.appendChild(alertDiv);
                setTimeout(() => {
                    if (document.body.contains(alertDiv)) {
                        document.body.removeChild(alertDiv);
                    }
                }, 5000);
                return;
            }

            const encodedSubject = encodeURIComponent(subject);
            const encodedMessage = encodeURIComponent(message);
            const whatsMeURL =
                `https://whats.me/${yourWhatsAppNumber}?text=Assunto:%20${encodedSubject}%0AMensagem:%20${encodedMessage}`;

            window.open(whatsMeURL, '_blank');
            closeModal();
            whatsAppForm.reset();
        });
    }

    if (whatsAppModal) {
        whatsAppModal.addEventListener('click', function(event) {
            if (event.target === whatsAppModal) {
                closeModal();
            }
        });
    }

    // Animated Background Canvas Script
    const canvas = document.getElementById('animated-background');
    const animation = document.getElementById('animated-background').classList[0]
    const quantity = document.getElementById('animated-background').classList[1]




    function CircleAnimation(canvas, quantity) {
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let circles = [];
            const numCircles = quantity; // Number of circles
            const primaryColorRGB = '10, 42, 77'; // #0A2A4D
            const secondaryColorRGB = '192, 160, 98'; // #C0A062

            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }

            class Circle {
                constructor(x, y, radius, color, lineWidth, speed) {
                    this.x = x || Math.random() * canvas.width * 10;
                    this.y = y || Math.random() * canvas.height * 10;
                    this.radius = radius || Math.random() * 50 + 20; // Initial radius
                    this.minRadius = this.radius;
                    this.maxRadius = this.radius + (Math.random() * 100 + 50); // How much it will expand
                    this.color = color || (Math.random() > 0.5 ?
                        `rgba(${primaryColorRGB}, ${Math.random() * 0.3 + 0.1})` :
                        `rgba(${secondaryColorRGB}, ${Math.random() * 0.3 + 0.1})`);
                    this.lineWidth = lineWidth || Math.random() * 1.5 + 0.5;
                    this.speed = speed || (Math.random() * 0.3 + 0.1);
                    this.opacity = 1;
                    this.fading = false;
                }

                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                    ctx.strokeStyle = this.color.replace(/,\s*\d?\.?\d*\)/,
                    `, ${this.opacity})`); // Update opacity in color string
                    ctx.lineWidth = this.lineWidth;
                    ctx.stroke();
                }

                update() {
                    if (!this.fading) {
                        this.radius += this.speed;
                        if (this.radius >= this.maxRadius) {
                            this.fading = true;
                        }
                    } else {
                        this.opacity -= 0.01; // Fade out speed
                    }

                    if (this.opacity <= 0) {
                        // Reset circle
                        this.x = Math.random() * canvas.width;
                        this.y = Math.random() * canvas.height;
                        this.radius = Math.random() * 50 + 20;
                        this.minRadius = this.radius;
                        this.maxRadius = this.radius + (Math.random() * 100 + 50);
                        this.color = (Math.random() > 0.5 ?
                            `rgba(${primaryColorRGB}, ${Math.random() * 0.3 + 0.1})` :
                            `rgba(${secondaryColorRGB}, ${Math.random() * 0.3 + 0.1})`);
                        this.opacity = 1;
                        this.fading = false;
                    }
                    this.draw();
                }
            }

            function initCircles() {
                circles = [];
                for (let i = 0; i < numCircles; i++) {
                    circles.push(new Circle());
                }
            }

            function animate() {
                requestAnimationFrame(animate);
                ctx.fillStyle = 'rgba(255, 255, 255, 1)'; // Solid white background for the canvas itself
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                circles.forEach(circle => {
                    circle.update();
                });
            }

            window.addEventListener('resize', () => {
                resizeCanvas();
                // Re-initialize circles if needed, or just let them adapt
                // For this animation, letting them adapt might be fine, or re-init for better distribution
                initCircles();
            });

            resizeCanvas();
            initCircles();
            animate();

        }
    }

    function LineAnimation(canvas, quantity) {
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let laserLines = [];
            const numLaserLines = quantity; // Adjusted number of laser lines for performance/visuals
            const primaryColorRGB = '10, 42, 77'; // #0A2A4D
            const secondaryColorRGB = '192, 160, 98'; // #C0A062

            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }

            class LaserLine {
                constructor(index) {
                    this.thickness = Math.random() * 8 + 2; // Thickness 2px to 10px
                    this.speed = Math.random() * 0.8 + 0.3; // Speed of head movement (0.3 to 1.1)
                    this.maxLength = canvas.width * 1.5; // Max total length of the laser path

                    this.points = []; // Array to store points of the laser path {x, y}
                    this.currentTotalLength = 0; // Current total length of all segments

                    this.headX = Math.random() * canvas.width;
                    this.headY = Math.random() * canvas.height;
                    this.points.push({
                        x: this.headX,
                        y: this.headY
                    }); // Start with the head as the first point

                    this.angle = Math.random() * Math.PI * 2;
                    this.dx = Math.cos(this.angle) * this.speed;
                    this.dy = Math.sin(this.angle) * this.speed;

                    this.isPrimaryColor = index % 2 === 0;
                    this.baseColorRGB = this.isPrimaryColor ? primaryColorRGB : secondaryColorRGB;
                    this.opacity = 1;
                }

                draw() {
                    if (this.points.length < 2 && this.currentTotalLength < 1)
                return; // Don't draw if it's just a point

                    ctx.beginPath();
                    ctx.moveTo(this.points[0].x, this.points[0].y);
                    for (let i = 1; i < this.points.length; i++) {
                        ctx.lineTo(this.points[i].x, this.points[i].y);
                    }
                    // Draw to the current head position if it's different from the last point (it always should be while growing)
                    ctx.lineTo(this.headX, this.headY);

                    ctx.lineWidth = this.thickness;
                    ctx.strokeStyle = `rgba(${this.baseColorRGB}, ${this.opacity})`;
                    ctx.lineCap = 'round';
                    ctx.lineJoin = 'round'; // For smoother corners on bounce
                    ctx.stroke();
                }

                update() {
                    const prevHeadX = this.headX;
                    const prevHeadY = this.headY;

                    this.headX += this.dx;
                    this.headY += this.dy;

                    const segmentLength = Math.sqrt(Math.pow(this.headX - prevHeadX, 2) + Math.pow(this.headY -
                        prevHeadY, 2));
                    this.currentTotalLength += segmentLength;

                    let bounced = false;
                    if (this.headX <= 0 && this.dx < 0) {
                        this.headX = 0;
                        this.dx *= -1;
                        bounced = true;
                    } else if (this.headX >= canvas.width && this.dx > 0) {
                        this.headX = canvas.width;
                        this.dx *= -1;
                        bounced = true;
                    }

                    if (this.headY <= 0 && this.dy < 0) {
                        this.headY = 0;
                        this.dy *= -1;
                        bounced = true;
                    } else if (this.headY >= canvas.height && this.dy > 0) {
                        this.headY = canvas.height;
                        this.dy *= -1;
                        bounced = true;
                    }

                    if (bounced) {
                        this.points.push({
                            x: prevHeadX,
                            y: prevHeadY
                        }); // Add the point before the bounce
                        this.points.push({
                            x: this.headX,
                            y: this.headY
                        }); // Add the bounce point itself as a new segment start
                        this.angle = Math.atan2(this.dy, this.dx);
                    }

                    // Fading logic based on total length
                    this.opacity = 1 - Math.pow(this.currentTotalLength / this.maxLength, 3); // Steeper fade
                    this.opacity = Math.max(0, this.opacity);

                    if (this.currentTotalLength >= this.maxLength || this.opacity <= 0.01) {
                        this.reset();
                    }

                    this.draw();
                }

                reset() {
                    this.points = [];
                    this.headX = Math.random() * canvas.width;
                    this.headY = Math.random() * canvas.height;
                    this.points.push({
                        x: this.headX,
                        y: this.headY
                    });

                    this.currentTotalLength = 0;
                    this.angle = Math.random() * Math.PI * 2;
                    this.speed = Math.random() * 0.8 + 0.3;

                    let newDx, newDy;
                    do {
                        newDx = Math.cos(this.angle) * this.speed;
                        newDy = Math.sin(this.angle) * this.speed;
                    } while (Math.abs(newDx) < 0.1 && Math.abs(newDy) < 0.1 && this.speed > 0.1);
                    this.dx = newDx;
                    this.dy = newDy;

                    this.opacity = 1;
                    this.thickness = Math.random() * 8 + 2;
                }
            }

            function initLaserLines() {
                laserLines = [];
                for (let i = 0; i < numLaserLines; i++) {
                    laserLines.push(new LaserLine(i));
                }
            }

            function animate() {
                requestAnimationFrame(animate);
                ctx.fillStyle = 'rgba(255, 255, 255, 1)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                laserLines.forEach(line => {
                    line.update();
                });
            }

            window.addEventListener('resize', () => {
                resizeCanvas();
                initLaserLines();
            });

            resizeCanvas();
            initLaserLines();
            animate();
        }
    }


    switch (animation) {
        case 'circles':
            CircleAnimation(canvas, quantity);
            console.log("Circle ?");

            break;
        case 'lines':
            LineAnimation(canvas, quantity);
            console.log("Line ?");

        default:
            break;
    }

    // Publications Carousel Logic
    const publicationsTrack = document.getElementById('publications-carousel-track');
    const prevPublicationBtn = document.getElementById('prevPublication');
    const nextPublicationBtn = document.getElementById('nextPublication');
    let publicationCards = [];
    let publicationCardWidth = 0;
    let currentPublicationIndex = 0;
    let visiblePublicationCards = 3;

    function setupPublicationsCarousel() {
        if (!publicationsTrack) return;
        publicationCards = Array.from(publicationsTrack.children);
        if (publicationCards.length === 0) return;

        updatePublicationCarouselDimensions();

        if (prevPublicationBtn) {
            prevPublicationBtn.addEventListener('click', () => {
                currentPublicationIndex = Math.max(currentPublicationIndex - 1, 0);
                transformPublicationsCarousel();
            });
        }

        if (nextPublicationBtn) {
            nextPublicationBtn.addEventListener('click', () => {
                const maxIndex = Math.max(0, publicationCards.length - visiblePublicationCards);
                currentPublicationIndex = Math.min(currentPublicationIndex + 1, maxIndex);
                transformPublicationsCarousel();
            });
        }
        window.addEventListener('resize', updatePublicationCarouselDimensions);
    }

    function updatePublicationCarouselDimensions() {
        if (publicationCards.length === 0 || !publicationsTrack) return;

        const firstCard = publicationCards[0];
        const cardStyle = window.getComputedStyle(firstCard);
        const cardMarginRight = parseFloat(cardStyle.marginRight);
        publicationCardWidth = firstCard.offsetWidth + cardMarginRight;

        const containerWidth = publicationsTrack.parentElement.offsetWidth;
        if (window.innerWidth < 768) {
            visiblePublicationCards = 1;
        } else if (window.innerWidth < 1024) {
            visiblePublicationCards = 2;
        } else {
            visiblePublicationCards = 3;
        }
        visiblePublicationCards = Math.max(1, visiblePublicationCards);
        transformPublicationsCarousel();
    }

    function transformPublicationsCarousel() {
        if (!publicationsTrack || publicationCards.length === 0) return;
        const maxIndex = Math.max(0, publicationCards.length - visiblePublicationCards);
        currentPublicationIndex = Math.max(0, Math.min(currentPublicationIndex, maxIndex));

        const offset = -currentPublicationIndex * publicationCardWidth;
        publicationsTrack.style.transform = `translateX(${offset}px)`;

        if (prevPublicationBtn) prevPublicationBtn.disabled = currentPublicationIndex === 0;
        if (nextPublicationBtn) nextPublicationBtn.disabled = currentPublicationIndex >= maxIndex;
    }

    window.addEventListener('load', setupPublicationsCarousel);



    // "Ver Mais" for Team Descriptions
    document.querySelectorAll('.team-card').forEach(card => {
        console.log(card);
        
        const descriptionWrapper = card.querySelector('.team-description-wrapper');
        if (!descriptionWrapper) return;

        const description = descriptionWrapper.querySelector('.team-description');
        const seeMoreBtn = descriptionWrapper.querySelector('.btn-see-more');

        if (!description || !seeMoreBtn) return;

        const initialMaxHeight = 63;

        setTimeout(() => {
            if (description.scrollHeight > initialMaxHeight) {
                seeMoreBtn.classList.remove('hidden');
            } else {
                description.style.maxHeight = 'none';
            }
        }, 100);


        seeMoreBtn.addEventListener('click', () => {
            description.classList.toggle('expanded');
            if (description.classList.contains('expanded')) {
                seeMoreBtn.textContent = 'Ver Menos';
            } else {
                seeMoreBtn.textContent = 'Ver Mais';
            }
        });
    });
</script>
</body>

</html>
