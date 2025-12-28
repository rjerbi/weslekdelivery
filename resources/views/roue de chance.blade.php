<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roue Magique</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff5314 0%, #fd692a 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: white;
        }

        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            max-width: 90%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .wheel-container {
            position: relative;
            margin: 0 auto;
            width: 100%;
            max-width: 500px;
        }

        .wheel {
            position: relative;
            width: 100%;
            height: auto;
            aspect-ratio: 1/1;
            margin: 0 auto 2rem;
            transition: transform 0.3s;
        }

        .wheel:hover {
            transform: scale(1.02);
        }

        .pointer {
            position: absolute;
            top: -5%;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 40px solid gold;
            z-index: 10;
            filter: drop-shadow(0 0 5px rgba(255, 215, 0, 0.7));
        }

        #spinBtn {
            background: linear-gradient(to right, #ff8a00, #da1b60);
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(218, 27, 96, 0.4);
            margin-top: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        #spinBtn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(218, 27, 96, 0.6);
        }

        #spinBtn:disabled {
            background: linear-gradient(to right, #cccccc, #999999);
            transform: none;
            box-shadow: none;
            cursor: not-allowed;
        }

        #result {
            margin-top: 30px;
            font-size: 28px;
            font-weight: bold;
            min-height: 40px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            transition: all 0.5s;
        }

        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: #f00;
            border-radius: 50%;
            pointer-events: none;
        }

        .segment-image {
            position: absolute;
            width: 40px;
            height: 40px;
            transform-origin: 0 0;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .winner-animation {
            animation: pulse 0.5s infinite alternate;
            color: gold;
        }

        .custom-inputs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .custom-inputs input {
            padding: 8px 12px;
            border-radius: 5px;
            border: none;
            width: 120px;
        }

        .add-segment-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✨ Roue Magique Spéciale ✨</h1>
        
        <div class="custom-inputs">
            <input type="text" id="segmentText" placeholder="Nom du prix">
            <input type="color" id="segmentColor" value="#FF6384">
            <button class="add-segment-btn" id="addSegmentBtn">Ajouter</button>
        </div>
        
        <div class="wheel-container">
            <div class="wheel">
                <canvas id="wheelCanvas"></canvas>
                <div class="pointer"></div>
            </div>
            <button id="spinBtn">TOURNER LA ROUE</button>
            <div id="result"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wheel = document.getElementById('wheelCanvas');
            const ctx = wheel.getContext('2d');
            const spinBtn = document.getElementById('spinBtn');
            const resultDiv = document.getElementById('result');
            const addSegmentBtn = document.getElementById('addSegmentBtn');
            const segmentTextInput = document.getElementById('segmentText');
            const segmentColorInput = document.getElementById('segmentColor');
            
            // Options initiales de la roue
            let segments = [
                { text: "Voyage", color: "#FF6384", emoji: "✈️" },
                { text: "Voiture", color: "#36A2EB", emoji: "🚗" },
                { text: "Cash", color: "#FFCE56", emoji: "💰" },
                { text: "Smartphone", color: "#4BC0C0", emoji: "📱" },
                { text: "Ordinateur", color: "#9966FF", emoji: "💻" },
                { text: "Vacances", color: "#FF9F40", emoji: "🏖️" }
            ];
            
            let segmentCount = segments.length;
            let segmentAngle = 2 * Math.PI / segmentCount;
            let currentRotation = 0;
            let isSpinning = false;
            let wheelSize = Math.min(500, window.innerWidth - 40);
            
            function resizeCanvas() {
                wheelSize = Math.min(500, window.innerWidth - 40);
                wheel.width = wheelSize;
                wheel.height = wheelSize;
                drawWheel();
            }
            
            window.addEventListener('resize', resizeCanvas);
            resizeCanvas();
            
            function drawWheel() {
                const center = wheelSize / 2;
                const radius = wheelSize / 2 - 10;
                
                ctx.clearRect(0, 0, wheel.width, wheel.height);
                
                ctx.shadowColor = 'rgba(0, 0, 0, 0.3)';
                ctx.shadowBlur = 15;
                ctx.shadowOffsetY = 5;
                
                for (let i = 0; i < segmentCount; i++) {
                    const startAngle = currentRotation + i * segmentAngle;
                    const endAngle = currentRotation + (i + 1) * segmentAngle;
                    
                    const gradient = ctx.createLinearGradient(
                        center + Math.cos(startAngle + segmentAngle/2) * radius * 0.7,
                        center + Math.sin(startAngle + segmentAngle/2) * radius * 0.7,
                        center + Math.cos(startAngle + segmentAngle/2) * radius,
                        center + Math.sin(startAngle + segmentAngle/2) * radius
                    );
                    gradient.addColorStop(0, lightenColor(segments[i].color, 20));
                    gradient.addColorStop(1, segments[i].color);
                    
                    ctx.beginPath();
                    ctx.moveTo(center, center);
                    ctx.arc(center, center, radius, startAngle, endAngle);
                    ctx.closePath();
                    ctx.fillStyle = gradient;
                    ctx.fill();
                    ctx.strokeStyle = 'rgba(255, 255, 255, 0.3)';
                    ctx.lineWidth = 2;
                    ctx.stroke();
                    
                    ctx.save();
                    ctx.translate(center, center);
                    ctx.rotate(startAngle + segmentAngle / 2);
                    
                    ctx.font = `bold ${Math.max(14, wheelSize/20)}px Arial`;
                    ctx.textAlign = "right";
                    ctx.fillStyle = "#fff";
                    ctx.shadowColor = 'rgba(0, 0, 0, 0.5)';
                    ctx.shadowBlur = 3;
                    ctx.shadowOffsetX = 1;
                    ctx.shadowOffsetY = 1;
                    
                    const textPos = radius * 0.7;
                    ctx.fillText(segments[i].text, textPos, 5);
                    
                    ctx.font = `${wheelSize/15}px Arial`;
                    ctx.fillText(segments[i].emoji, textPos - 10, -textPos * 0.3);
                    
                    ctx.restore();
                }
                
                const centerGradient = ctx.createRadialGradient(
                    center, center, 5,
                    center, center, 20
                );
                centerGradient.addColorStop(0, '#ffffff');
                centerGradient.addColorStop(1, '#cccccc');
                
                ctx.beginPath();
                ctx.arc(center, center, 20, 0, 2 * Math.PI);
                ctx.fillStyle = centerGradient;
                ctx.fill();
                
                ctx.strokeStyle = 'rgba(0, 0, 0, 0.2)';
                ctx.lineWidth = 2;
                ctx.stroke();
                
                ctx.beginPath();
                ctx.arc(center, center, radius, 0, 2 * Math.PI);
                ctx.strokeStyle = 'rgba(255, 255, 255, 0.4)';
                ctx.lineWidth = 3;
                ctx.stroke();
                
                ctx.shadowColor = 'transparent';
            }
            
            function lightenColor(color, percent) {
                const num = parseInt(color.replace("#", ""), 16);
                const amt = Math.round(2.55 * percent);
                const R = (num >> 16) + amt;
                const G = (num >> 8 & 0x00FF) + amt;
                const B = (num & 0x0000FF) + amt;
                
                return `#${(
                    0x1000000 +
                    (R < 255 ? (R < 1 ? 0 : R) : 255) * 0x10000 +
                    (G < 255 ? (G < 1 ? 0 : G) : 255) * 0x100 +
                    (B < 255 ? (B < 1 ? 0 : B) : 255)
                ).toString(16).slice(1)}`;
            }
            
            function spinWheel() {
                if (isSpinning) return;
                
                isSpinning = true;
                spinBtn.disabled = true;
                resultDiv.textContent = "";
                resultDiv.classList.remove("winner-animation");
                
                const spinTime = 3000 + Math.random() * 2000;
                const startTime = Date.now();
                const startRotation = currentRotation;
                const spinRotation = 10 * Math.PI * 2 + Math.random() * 5 * Math.PI * 2;
                
                let audioContext;
                let spinSound;
                try {
                    audioContext = new (window.AudioContext || window.webkitAudioContext)();
                    const oscillator = audioContext.createOscillator();
                    const gainNode = audioContext.createGain();
                    
                    oscillator.type = 'sine';
                    oscillator.frequency.setValueAtTime(200, audioContext.currentTime);
                    oscillator.frequency.exponentialRampToValueAtTime(50, audioContext.currentTime + spinTime/1000);
                    
                    gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
                    gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + spinTime/1000);
                    
                    oscillator.connect(gainNode);
                    gainNode.connect(audioContext.destination);
                    oscillator.start();
                    oscillator.stop(audioContext.currentTime + spinTime/1000);
                    
                    spinSound = { oscillator, gainNode };
                } catch (e) {
                    console.log("Audio non supporté");
                }
                
                function animate() {
                    const elapsed = Date.now() - startTime;
                    const progress = Math.min(elapsed / spinTime, 1);
                    const easeOut = 1 - Math.pow(1 - progress, 4);
                    
                    currentRotation = startRotation + easeOut * spinRotation;
                    
                    drawWheel();
                    
                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    } else {
                        finishSpin();
                        if (spinSound) {
                            spinSound.oscillator.stop();
                        }
                    }
                }
                
                animate();
            }
            
            function finishSpin() {
                isSpinning = false;
                spinBtn.disabled = false;
                
                const normalizedRotation = ((currentRotation % (2 * Math.PI)) + 2 * Math.PI) % (2 * Math.PI);
                const winningSegment = segmentCount - 1 - Math.floor(normalizedRotation / segmentAngle);
                
                resultDiv.textContent = `🎉 Félicitations ! Vous avez gagné : ${segments[winningSegment].text} ${segments[winningSegment].emoji} 🎉`;
                resultDiv.classList.add("winner-animation");
                
                createConfetti();
                
                try {
                    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
                    const oscillator = audioContext.createOscillator();
                    const gainNode = audioContext.createGain();
                    
                    oscillator.type = 'triangle';
                    oscillator.frequency.setValueAtTime(440, audioContext.currentTime);
                    oscillator.frequency.exponentialRampToValueAtTime(880, audioContext.currentTime + 0.1);
                    oscillator.frequency.exponentialRampToValueAtTime(440, audioContext.currentTime + 0.2);
                    
                    gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
                    gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.3);
                    
                    oscillator.connect(gainNode);
                    gainNode.connect(audioContext.destination);
                    oscillator.start();
                    oscillator.stop(audioContext.currentTime + 0.3);
                } catch (e) {
                    console.log("Audio non supporté");
                }
            }
            
            function createConfetti() {
                const colors = ['#ff0000', '#00ff00', '#0000ff', '#ffff00', '#ff00ff', '#00ffff'];
                
                for (let i = 0; i < 100; i++) {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.left = `${Math.random() * 100}vw`;
                    confetti.style.top = '-10px';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.width = `${Math.random() * 10 + 5}px`;
                    confetti.style.height = `${Math.random() * 10 + 5}px`;
                    confetti.style.borderRadius = `${Math.random() * 50}%`;
                    confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
                    
                    document.body.appendChild(confetti);
                    
                    const animationDuration = Math.random() * 3 + 2;
                    
                    confetti.animate([
                        { top: '-10px', opacity: 1, transform: `rotate(0deg)` },
                        { top: `${Math.random() * 100 + 100}vh`, opacity: 0, transform: `rotate(${Math.random() * 360}deg)` }
                    ], {
                        duration: animationDuration * 1000,
                        easing: 'cubic-bezier(0.1, 0.8, 0.9, 1)'
                    });
                    
                    setTimeout(() => {
                        confetti.remove();
                    }, animationDuration * 1000);
                }
            }
            
            function addSegment() {
                const text = segmentTextInput.value.trim();
                const color = segmentColorInput.value;
                
                if (text && color) {
                    const emojis = ["🎁", "🏆", "💰", "✈️", "🏖️", "🚗", "📱", "💻", "🎮", "🍾"];
                    const randomEmoji = emojis[Math.floor(Math.random() * emojis.length)];
                    
                    segments.push({
                        text,
                        color,
                        emoji: randomEmoji
                    });
                    
                    segmentCount = segments.length;
                    segmentAngle = 2 * Math.PI / segmentCount;
                    
                    drawWheel();
                    segmentTextInput.value = '';
                }
            }
            
            spinBtn.addEventListener('click', spinWheel);
            addSegmentBtn.addEventListener('click', addSegment);
            segmentTextInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') addSegment();
            });
            
            drawWheel();
        });
    </script>
</body>
</html>