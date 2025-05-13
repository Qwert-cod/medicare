// Medicine database
const medicineDatabase = [
    {
        name: "Paracetamol",
        usage: "fever, headache, pain, cold, flu",
        dosage: "Adults: 500-1000mg every 4-6 hours as needed (max 4g per day). Children: 10-15mg/kg every 4-6 hours.",
        contraindications: "Liver disease, alcoholism, allergic reactions to paracetamol."
    },
    {
        name: "Ibuprofen",
        usage: "pain, inflammation, fever, headache, menstrual cramps, arthritis",
        dosage: "Adults: 200-400mg every 4-6 hours as needed (max 1200mg per day). Children: 5-10mg/kg every 6-8 hours.",
        contraindications: "Stomach ulcers, asthma, heart failure, allergic reactions to NSAIDs, pregnancy (third trimester)."
    },
    {
        name: "Metformin",
        usage: "diabetes, type 2 diabetes, insulin resistance",
        dosage: "Starting dose: 500mg twice daily or 850mg once daily. Maintenance: 2000-2500mg daily in divided doses.",
        contraindications: "Kidney disease, liver disease, heart failure, alcoholism, diabetic ketoacidosis."
    },
    {
        name: "Amoxicillin",
        usage: "bacterial infection, throat infection, ear infection, pneumonia, bronchitis, sinusitis",
        dosage: "Adults: 250-500mg three times daily. Children: 20-40mg/kg/day divided in 3 doses.",
        contraindications: "Allergy to penicillins, mononucleosis, asthma."
    },
    {
        name: "Loratadine",
        usage: "allergy, hay fever, hives, itching, sneezing, runny nose",
        dosage: "Adults and children over 12: 10mg once daily. Children 2-12: 5mg once daily.",
        contraindications: "Liver disease, pregnancy, breastfeeding."
    },
    {
        name: "Omeprazole",
        usage: "heartburn, acid reflux, stomach ulcer, gastritis, GERD",
        dosage: "Adults: 20mg once daily for 4-8 weeks. Maintenance: 10-40mg once daily.",
        contraindications: "Allergy to proton pump inhibitors, pregnancy, liver disease."
    },
    {
        name: "Aspirin",
        usage: "pain, fever, inflammation, heart attack prevention, stroke prevention",
        dosage: "Pain/fever: 325-650mg every 4-6 hours. Heart attack/stroke prevention: 81-325mg once daily.",
        contraindications: "Bleeding disorders, stomach ulcers, children under 12 (risk of Reye's syndrome), asthma."
    },
    {
        name: "Diphenhydramine",
        usage: "allergy, insomnia, cold, cough, itching, rash, motion sickness",
        dosage: "Adults: 25-50mg every 4-6 hours. Children 6-12: 12.5-25mg every 4-6 hours.",
        contraindications: "Glaucoma, enlarged prostate, asthma, pregnancy, breastfeeding."
    },
    {
        name: "Ciprofloxacin",
        usage: "urinary tract infection, respiratory infection, skin infection, bacterial infection",
        dosage: "Adults: 250-750mg twice daily for 7-14 days depending on infection type.",
        contraindications: "Children under 18, pregnancy, breastfeeding, myasthenia gravis, tendon disorders."
    },
    {
        name: "Salbutamol",
        usage: "asthma, wheezing, shortness of breath, breathing difficulty, COPD",
        dosage: "Adults and children: 1-2 puffs every 4-6 hours as needed. For acute asthma: 4-8 puffs every 20 minutes for up to 4 hours.",
        contraindications: "Hypersensitivity to salbutamol, uncontrolled hypertension, severe cardiac disease."
    }
];

// Function to generate prescription
function generatePrescription() {
    // Get patient information
    const patientName = document.getElementById('patientName').value;
    const patientAge = document.getElementById('patientAge').value;
    const patientGender = document.querySelector('input[name="gender"]:checked')?.value;
    const symptom = document.getElementById('symptom').value;
    
    // Validate inputs
    if (!patientName || !patientAge || !patientGender || !symptom) {
        alert("Please fill in all fields");
        return;
    }
    
    // Set current date
    const currentDate = new Date();
    const dateString = currentDate.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
    
    // Display patient information in prescription
    document.getElementById('prescriptionDate').textContent = dateString;
    document.getElementById('prescPatientName').textContent = patientName;
    document.getElementById('prescPatientAge').textContent = patientAge;
    document.getElementById('prescPatientGender').textContent = patientGender;
    document.getElementById('prescSymptom').textContent = symptom;
    
    // Find matching medicines
    const symptomLower = symptom.toLowerCase();
    const matchingMedicines = medicineDatabase.filter(medicine => 
        medicine.usage.toLowerCase().includes(symptomLower)
    );
    
    // Display medicines in prescription
    const medicinesList = document.getElementById('medicinesList');
    medicinesList.innerHTML = '';
    
    if (matchingMedicines.length > 0) {
        matchingMedicines.forEach((medicine, index) => {
            const medicineItem = document.createElement('div');
            medicineItem.className = 'medicine-item';
            
            medicineItem.innerHTML = `
                <div class="medicine-name">${index + 1}. ${medicine.name}</div>
                <div class="medicine-info"><strong>Usage:</strong> ${capitalizeFirstLetter(medicine.usage)}</div>
                <div class="medicine-info"><strong>Dosage:</strong> ${medicine.dosage}</div>
                <div class="medicine-info warning"><strong>Contraindications:</strong> ${medicine.contraindications}</div>
            `;
            
            medicinesList.appendChild(medicineItem);
        });
    } else {
        medicinesList.innerHTML = '<p>No specific medicines found for this symptom/diagnosis. Please consult with a doctor.</p>';
    }
    
    // Show prescription
    document.getElementById('prescription').classList.remove('hidden');
}

// Function to print prescription
function printPrescription() {
    window.print();
}

// Helper function to capitalize first letter of each sentence
function capitalizeFirstLetter(string) {
    return string.split('. ')
        .map(sentence => sentence.charAt(0).toUpperCase() + sentence.slice(1))
        .join('. ');
}

// Add event listeners for Enter key
document.getElementById('patientName').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        document.getElementById('patientAge').focus();
    }
});

document.getElementById('patientAge').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        document.getElementById('symptom').focus();
    }
});

document.getElementById('symptom').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        generatePrescription();
    }
});