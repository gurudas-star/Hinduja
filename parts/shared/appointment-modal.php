<?php
/**
 * Shared appointment booking modal.
 * Usage:  <?php require_once('parts/shared/appointment-modal.php'); ?>
 * Requires the JS helpers openAppointment()/closeAppointment() — included below once.
 * Styles come from assets/css/hinduja-shared.css (loaded globally via app.php).
 */
?>
<!-- APPOINTMENT MODAL (shared) -->
<div id="appointmentModal" class="appointment-modal" aria-hidden="true">
    <div class="modal-box" role="dialog" aria-modal="true" aria-labelledby="appointmentModalTitle">
        <span class="close-modal" onclick="closeAppointment()" role="button" aria-label="Close">&times;</span>

        <h2 class="modal-title" id="appointmentModalTitle">Book an Appointment</h2>

        <input type="text" id="doctorName" readonly>
        <input type="text" id="doctorDesignation" readonly>

        <input type="text" id="patientName" placeholder="Enter Your Full Name*" required>
        <input type="email" id="patientEmail" placeholder="Enter Your Email Address*" required>
        <input type="text" id="patientPhone" placeholder="Enter Your Phone Number*" required>

        <textarea id="patientMessage" placeholder="Briefly describe your symptoms or concern (Optional)"></textarea>

        <button type="button" class="submit-btn" onclick="submitAppointment()">Submit Request</button>
    </div>
</div>

<script>
    if (typeof openAppointment !== 'function') {
        function openAppointment(name, designation) {
            var modal = document.getElementById("appointmentModal");
            if (!modal) return;
            modal.style.display = "block";
            modal.setAttribute('aria-hidden', 'false');
            var nameEl = document.getElementById("doctorName");
            var desigEl = document.getElementById("doctorDesignation");
            if (nameEl) nameEl.value = name || '';
            if (desigEl) desigEl.value = designation || '';
            var pn = document.getElementById("patientName");
            var pe = document.getElementById("patientEmail");
            var pp = document.getElementById("patientPhone");
            var pm = document.getElementById("patientMessage");
            if (pn) pn.value = '';
            if (pe) pe.value = '';
            if (pp) pp.value = '';
            if (pm) pm.value = '';
            document.body.style.overflow = 'hidden';
        }

        function closeAppointment() {
            var modal = document.getElementById("appointmentModal");
            if (!modal) return;
            modal.style.display = "none";
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        function submitAppointment() {
            var doctorName = document.getElementById("doctorName").value;
            var patientName = document.getElementById("patientName").value;
            var patientEmail = document.getElementById("patientEmail").value;
            var patientPhone = document.getElementById("patientPhone").value;

            if (!patientName || !patientEmail || !patientPhone) {
                alert("Please fill in all required fields (Name, Email, Phone).");
                return;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(patientEmail)) {
                alert("Please enter a valid email address.");
                return;
            }

            if (patientPhone.length < 10) {
                alert("Please enter a valid 10-digit phone number.");
                return;
            }

            alert("Thank you " + patientName + "!\n\nYour appointment request has been submitted for:\nDoctor: " + doctorName + "\n\nOur clinic representative will connect with you shortly.");
            closeAppointment();
        }

        window.addEventListener('click', function (event) {
            var modal = document.getElementById("appointmentModal");
            if (modal && event.target === modal) {
                closeAppointment();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeAppointment();
        });
    }
</script>
