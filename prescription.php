<?php
header("Content-type: text/html");

$patientName = $patientAge = $gender = $symptom = "";
$matchedMedicines = [];

$medicineDatabase = [
    [
        "name" => "Paracetamol",
        "usage" => "fever, headache, pain, cold, flu",
        "dosage" => "Adults: 500-1000mg every 4-6 hours as needed (max 4g per day). Children: 10-15mg/kg every 4-6 hours.",
        "contraindications" => "Liver disease, alcoholism, allergic reactions to paracetamol."
    ],
    [
        "name" => "Ibuprofen",
        "usage" => "pain, inflammation, fever, headache, menstrual cramps, arthritis",
        "dosage" => "Adults: 200-400mg every 4-6 hours as needed (max 1200mg per day). Children: 5-10mg/kg every 6-8 hours.",
        "contraindications" => "Stomach ulcers, asthma, heart failure, allergic reactions to NSAIDs, pregnancy (third trimester)."
    ],
    [
        "name" => "Metformin",
        "usage" => "diabetes, type 2 diabetes, insulin resistance",
        "dosage" => "Starting dose: 500mg twice daily or 850mg once daily. Maintenance: 2000-2500mg daily in divided doses.",
        "contraindications" => "Kidney disease, liver disease, heart failure, alcoholism, diabetic ketoacidosis."
    ],
    [
        "name" => "Amoxicillin",
        "usage" => "bacterial infection, throat infection, ear infection, pneumonia, bronchitis, sinusitis",
        "dosage" => "Adults: 250-500mg three times daily. Children: 20-40mg/kg/day divided in 3 doses.",
        "contraindications" => "Allergy to penicillins, mononucleosis, asthma."
    ],
    [
        "name" => "Loratadine",
        "usage" => "allergy, hay fever, hives, itching, sneezing, runny nose",
        "dosage" => "Adults and children over 12: 10mg once daily. Children 2-12: 5mg once daily.",
        "contraindications" => "Liver disease, pregnancy, breastfeeding."
    ],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = htmlspecialchars($_POST['patientName']);
    $patientAge = htmlspecialchars($_POST['patientAge']);
    $gender = htmlspecialchars($_POST['gender']);
    $symptom = strtolower(trim(htmlspecialchars($_POST['symptom'])));

    foreach ($medicineDatabase as $medicine) {
        if (strpos(strtolower($medicine['usage']), $symptom) !== false) {
            $matchedMedicines[] = $medicine;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prescription Tool</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #eef2f3;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1, h2 {
            color: #2c3e50;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .radio-group {
            display: flex;
            gap: 15px;
        }

        .submit-btn, .print-btn {
            background: #2980b9;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            display: inline-block;
            margin-top: 10px;
        }

        .submit-btn:hover, .print-btn:hover {
            background: #1f6691;
        }

        hr {
            margin: 30px 0;
        }

        .rx-symbol {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-top: 25px;
            color: #555;
        }

        .medicine-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px 20px;
            margin: 15px 0;
            border-radius: 10px;
        }

        .medicine-card strong {
            display: inline-block;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .prescription-info p {
            margin: 6px 0;
        }

        @media print {
            .submit-btn, .print-btn {
                display: none;
            }

            .container {
                box-shadow: none;
                border: none;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Online Medicine Prescription Tool</h1>
    <form method="POST" action="">
        <div class="form-group">
            <label for="patientName">Patient Name:</label>
            <input type="text" name="patientName" id="patientName" required>
        </div>

        <div class="form-group">
            <label for="patientAge">Age:</label>
            <input type="number" name="patientAge" id="patientAge" required>
        </div>

        <div class="form-group">
            <label>Gender:</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female" required> Female</label>
                <label><input type="radio" name="gender" value="Other" required> Other</label>
            </div>
        </div>

        <div class="form-group">
            <label for="symptom">Symptom / Diagnosis:</label>
            <input type="text" name="symptom" id="symptom" required placeholder="e.g. fever, headache, diabetes">
        </div>

        <button type="submit" class="submit-btn">Generate Prescription</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <div id="prescription">
            <h2>Medical Prescription</h2>
            <div class="prescription-info">
                <p><strong>Date:</strong> <?php echo date("Y-m-d"); ?></p>
                <p><strong>Patient:</strong> <?php echo $patientName; ?></p>
                <p><strong>Age:</strong> <?php echo $patientAge; ?></p>
                <p><strong>Gender:</strong> <?php echo $gender; ?></p>
                <p><strong>Symptom:</strong> <?php echo $symptom; ?></p>
            </div>

            <div class="rx-symbol">Rx</div>

            <div id="medicinesList">
                <?php if (count($matchedMedicines) > 0): ?>
                    <?php foreach ($matchedMedicines as $index => $med): ?>
                        <div class="medicine-card">
                            <strong><?php echo ($index + 1) . ". " . $med['name']; ?></strong><br>
                            <strong>Usage:</strong> <?php echo ucfirst($med['usage']); ?><br>
                            <strong>Dosage:</strong> <?php echo $med['dosage']; ?><br>
                            <strong>Contraindications:</strong> <?php echo $med['contraindications']; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No specific medicines found for this symptom. Please consult with a doctor.</p>
                <?php endif; ?>
            </div>

            <p><strong>Doctor's Signature:</strong> ____________________</p>
            <button class="print-btn" onclick="window.print()">Print Prescription</button>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
<?php