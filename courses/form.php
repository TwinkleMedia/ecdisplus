<!-- form.php -->
<div class="modal-overlay" id="modalOverlay" onclick="closeModalOnOverlay(event)">
    <div class="modal-container">
        <button class="close-btn" onclick="closeModal()">×</button>
        <h2>Book Your Course</h2>
        <form id="bookingForm" onsubmit="submitToWhatsApp(event)">
            <input type="text" id="fullName" placeholder="Full Name" required>
            <input type="email" id="email" placeholder="Email Address" required>
            <input type="tel" id="phone" placeholder="Phone Number" required>
            <select id="course" required>
                <option value="">Select Course</option>
                <option value="IMTECH SeaGuide">IMTECH SeaGuide</option>
                <option value="SIMRAD Maris ECDIS900">SIMRAD Maris ECDIS900</option>
                <option value="Simrad E5024 Online Course">Simrad E5024 Online Course</option>
                <option value="Wartsila Navi-Sailor 4000 by Transas">Wartsila Navi-Sailor 4000 by Transas</option>
                <option value="Wärtsilä SAM CHARTPILOT">Wärtsilä SAM CHARTPILOT</option>
                <option value="Tokyo Keiki EC-8100/8600">Tokyo Keiki EC-8100/8600</option>
                <option value="ECDIS JRC JAN 9201/7201">ECDIS JRC JAN 9201/7201</option>
                <option value="JRC JAN 901B/701B/2000">JRC JAN 901B/701B/2000</option>
                <option value="Kelvin Hughes Manta Digital">Kelvin Hughes Manta Digital</option>
                <option value="Martek Marine iECDIS">Martek Marine iECDIS</option>
                <option value="Consilium Selesmar ECDIS">Consilium Selesmar ECDIS</option>
                <option value="Consilium ECDIS G2">Consilium ECDIS G2</option>
                <option value="ChartWorld ChartBrowser">ChartWorld ChartBrowser</option>
                <option value="Sperry Marine VisionMaster">Sperry Marine VisionMaster</option>
                <option value="Raytheon Anschütz Synapsis ECDIS">Raytheon Anschütz Synapsis ECDIS</option>
                <option value="Furuno FMD Type Specific ECDIS Training">Furuno FMD Type Specific ECDIS Training</option>
                <option value="Furuno FEA Type Specific Training">Furuno FEA Type Specific Training</option>
                <option value="Kongsberg ECDIS">Kongsberg ECDIS</option>
                <option value="NAVMASTER ECDIS">NAVMASTER ECDIS</option>
                <option value="TOTEM PLUS ECDIS Version 3.0">TOTEM PLUS ECDIS Version 3.0</option>
                <option value="Danelec Marine DM800 ECDIS G2">Danelec Marine DM800 ECDIS G2</option>
                <option value="Danelec Marine DM700 ECDIS">Danelec Marine DM700 ECDIS</option>
                <option value="MECys PM3D ECDIS Training">MECys PM3D ECDIS Training</option>
            </select>
            <button type="submit" class="submit-btn-modal">Submit</button>
        </form>
    </div>
</div>

<style>
/* Reset button default styles for navbar button */
button.booknowbtn {
    font-family: 'Raleway', sans-serif;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
    cursor: pointer;
    border: none;
}

.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    align-items: center;
    justify-content: center;
}

.modal-overlay.active {
    display: flex;
}

.modal-container {
    background: white;
    padding: 30px;
    border-radius: 10px;
    max-width: 500px;
    width: 90%;
    position: relative;
}

.modal-container .close-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    background: none;
    border: none;
    font-size: 30px;
    cursor: pointer;
    color: #333;
}

.modal-container h2 {
    margin-bottom: 20px;
    color: #333;
}

.modal-container input,
.modal-container select {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.submit-btn-modal {
    width: 100%;
    padding: 12px;
    background: #1e3a5f;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.submit-btn-modal:hover {
    background: #2d5a8f;
}
</style>

<script>
function openModal() {
    document.getElementById('modalOverlay').classList.add('active');
}

function closeModal() {
    document.getElementById('modalOverlay').classList.remove('active');
}

function closeModalOnOverlay(event) {
    if (event.target.id === 'modalOverlay') {
        closeModal();
    }
}

function submitToWhatsApp(event) {
    event.preventDefault();
    
    const fullName = document.getElementById('fullName').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const course = document.getElementById('course').value;
    
    const message = `*New Course Booking*%0A%0A` +
                    `Name: ${encodeURIComponent(fullName)}%0A` +
                    `Email: ${encodeURIComponent(email)}%0A` +
                    `Phone: ${encodeURIComponent(phone)}%0A` +
                    `Course: ${encodeURIComponent(course)}`;
    
    const whatsappNumber = '917710074143'; // Replace with your WhatsApp number
    
    window.open(`https://wa.me/${whatsappNumber}?text=${message}`, '_blank');
    
    closeModal();
}
</script>