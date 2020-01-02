import QrScanner from './scannerFiles/qr-scanner.min.js';
QrScanner.WORKER_PATH = './scannerFiles/qr-scanner-worker.min.js';

const video = document.getElementById('qr-video');
const camHasCamera = document.getElementById('cam-has-camera');
const camQrResult = document.getElementById('cam-qr-result');
const camQrResultTimestamp = document.getElementById('cam-qr-result-timestamp');

function setResult(label, result) {
    label.textContent = result;
    camQrResultTimestamp.textContent = new Date().toString();
    label.style.color = 'teal';
    clearTimeout(label.highlightTimeout);
    label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);

    console.log(result);
}

// ####### Web Cam Scanning #######

QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);
const scanner = new QrScanner(video, result => setResult(camQrResult, result));

scanner.start();

document.getElementById('inversion-mode-select').addEventListener('change', event => {
    scanner.setInversionMode(event.target.value);
});
