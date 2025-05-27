@aware(['page'])
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title }}</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">
    <style>
        #page-description+p,
        #page-description+p+p,
        #page-description+p+p+p {
            font-size: 16pt !important;
            color: rgb(106, 106, 106);
        }

        .description-text+p,
        .description-text+p+p,
        .description-text+p+p+p {
            color: rgb(104, 104, 104)
        }


        body {
            font-family: 'Inter', sans-serif;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        .hero-bg-content {
            background-color: #F0F4F8;
        }

        .primary-color {
            color: #0A2A4D;
        }

        .secondary-color {
            color: #C0A062;
        }


        .bg-secondary {
            background-color: #C0A062 !important;
        }

        .btn-primary {
            background-color: #0A2A4D;
            color: white;
        }

        .btn-primary:hover {
            background-color: #08223F;
        }

        .btn-secondary {
            background-color: #C0A062;
            color: #0A2A4D;
        }

        .btn-secondary:hover {
            background-color: #B09052;
        }

        .footer-bg {
            background-color: #0A2A4D;
        }

        .social-icon svg {
            width: 24px;
            height: 24px;
            fill: white;
            transition: fill 0.3s ease;
        }

        .social-icon:hover svg {
            fill: #C0A062;
        }

        .initial-social-icon svg {
            fill: #0A2A4D;
            /* Icons inside blurred container will be dark blue */
            transition: fill 0.3s ease, transform 0.3s ease;
        }

        .initial-social-icon:hover svg {
            fill: #C0A062;
            transform: scale(1.1);
        }

        /* Text color for social icon names inside blurred container */
        .initial-social-icon-text {
            color: #0A2A4D;
            /* primary-color */
        }

        .initial-social-icon:hover .initial-social-icon-text {
            color: #C0A062;
            /* secondary-color on hover */
        }


        .scroll-down-icon {
            width: 30px;
            height: 50px;
            border: 2px solid #0A2A4D;
            border-radius: 50px;
            position: relative;
            animation: scroll-animation 2s infinite;
            filter: blur(0.5px);
        }

        .scroll-down-icon::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            width: 6px;
            height: 6px;
            margin-left: -3px;
            background-color: #0A2A4D;
            border-radius: 100%;
            animation: scroll-dot-animation 2s infinite;
        }

        @keyframes scroll-animation {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            50% {
                opacity: 0.5;
                transform: translateY(10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scroll-dot-animation {
            0% {
                transform: translateY(0);
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            50% {
                transform: translateY(20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 0;
            }
        }

        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .modal-content {
            max-height: 90vh;
        }

        .team-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            /* justify-content: space-between; */
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

         .team-description {
            max-height: 63px; /* Approx 3 lines */
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
            text-align: left; 
        }
        .team-description.expanded {
            max-height: 700px; 
        }
        .btn-see-more {
            @apply text-sm secondary-color hover:underline mt-2 cursor-pointer;
        }


        .team-member-img {
            width: 100px;
            height: 100px;
            border-radius: 9999px;
            object-fit: cover;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1rem;
            border: 3px solid #C0A062;
        }

        .btn-email {
            background-color: #0A2A4D;
            color: white;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
            display: inline-flex;
            align-items: center;
            margin-top: auto;
        }

        .btn-email:hover {
            background-color: #08223F;
        }

        .btn-email svg {
            margin-right: 0.5rem;
        }
 .carousel-container {
            position: relative;
            width: 100%; 
            margin: 0 auto;
        }
        .carousel-track-container {
            overflow: hidden;
        }
        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .publication-card {
            min-width: 300px; 
            width: 300px; 
            height: 420px; 
            flex: 0 0 auto; 
            margin-right: 1.5rem; 
            background-color: white;
            border-radius: 0.75rem; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.05), 0 6px 12px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .publication-card:hover {
            transform: translateY(-8px) scale(1.02); 
            box-shadow: 0 10px 20px rgba(0,0,0,0.07), 0 8px 16px rgba(0,0,0,0.07);
            z-index: 10; 
        }
        .publication-card-icon-area {
            background-color: #e9f2fa; 
            padding: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            height: 120px; 
        }
        .publication-card-icon-area svg {
            width: 48px; 
            height: 48px; 
            color: #0A2A4D; 
        }
        .publication-card-content {
            padding: 1.25rem; 
            flex-grow: 1; 
            display: flex;
            flex-direction: column;
        }
         .publication-card-title {
            @apply text-lg font-semibold primary-color mb-2 leading-tight;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;  
            overflow: hidden;
            text-overflow: ellipsis;
            min-height: 2.75rem; 
        }
        .publication-card-summary {
            @apply text-sm text-gray-600 mb-3 leading-relaxed flex-grow;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;  
            overflow: hidden;
            text-overflow: ellipsis;
            min-height: 4.5rem; 
        }
        .publication-card-meta {
            margin-top: 0.75rem; 
            margin-bottom: 0.75rem; 
            border-top: 1px solid #e5e7eb; 
            padding-top: 0.75rem; 
        }
        .publication-card-actions {
            padding: 0 1.25rem 1.25rem; 
            display: flex;
            justify-content: space-between; 
            align-items: center;
            margin-top: auto; 
        }
        .btn-publication { 
            @apply py-2 px-4 rounded-md text-sm font-medium inline-flex items-center justify-center;
        }
        .btn-visualizar {
            @apply text-amber-500 hover:text-amber-600 hover:bg-amber-50 border border-amber-500;
        }
        .btn-download { /* Renamed from btn-ler-documento for clarity */
            @apply bg-blue-600 text-white hover:bg-blue-700 ml-3; 
        }

        .carousel-button-wrapper {
            display: flex;
            justify-content: space-between; 
            margin-top: 1.5rem; 
            padding: 0 0.5rem; 
        }
        .carousel-button {
            background-color: #0A2A4D; 
            color: white;
            border: none;
            padding: 0.75rem 1.5rem; 
            border-radius: 0.375rem; 
            cursor: pointer;
            transition: background-color 0.3s ease, opacity 0.3s ease;
            display: inline-flex;
            align-items: center;
            font-weight: 500;
            font-size: 0.875rem; 
        }
        .carousel-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        .carousel-button:hover:not(:disabled) {
            background-color: #08223F; 
        }
        .carousel-button svg { 
            width: 1.25rem; 
            height: 1.25rem; 
        }
        .carousel-button.prev svg {
            margin-right: 0.5rem; 
        }
        .carousel-button.next svg {
            margin-left: 0.5rem; 
        }

        .carousel-track-container::-webkit-scrollbar { display: none; }
        .carousel-track-container { -ms-overflow-style: none;  scrollbar-width: none; }

        #animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            /* Behind the content container */
        }
    </style>
</head>
