<?php

// Mendefinisakan bobot penyakit kasus lama
$weights = array(
    'BK001 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G03_influenza" => 0.8, "G04_influenza" => 0.6, "G08_influenza" => 0.4),
    'BK002 Influenza' => array("G02_influenza" => 0.8, "G04_influenza" => 0.6, "G07_influenza" => 0.4, "G08_influenza" => 0.4),
    'BK003 Influenza' => array("G01_influenza" => 1, "G05_influenza" => 0.6, "G06_influenza" => 0.6, "G09_influenza" => 0.4),
    'BK004 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8,"G03_influenza" => 0.8, "G06_influenza" => 0.6, "G08_influenza" => 0.4),
    'BK005 Influenza' => array("G02_influenza" => 0.8, "G08_influenza" => 0.4, "G11_influenza" => 0.6, "G13_influenza" => 0.4),
    'BK006 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G08_influenza" => 0.4, "G14_influenza" => 0),
    'BK007 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G03_influenza" => 0.8, "G17_influenza" => 0.4),
    'BK008 Influenza' => array("G02_influenza" => 0.8, "G04_influenza" => 0.6, "G05_influenza" => 0.6, "G12_influenza" => 0.2),
    'BK009 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G03_influenza" => 0.8, "G09_influenza" => 0.4),
    'BK010 Influenza' => array("G02_influenza" => 0.8, "G04_influenza" => 0.6, "G06_influenza" => 0.6),
    'BK011 Influenza' => array("G02_influenza" => 0.8, "G04_influenza" => 0.6, "G08_influenza" => 0.4, "G13_influenza" => 0.4),
    'BK012 Influenza' => array("G02_influenza" => 0.8, "G05_influenza" => 0.6, "G08_influenza" => 0.4, "G10_influenza" => 0.6),
    'BK013 Influenza' => array("G04_influenza" => 0.6, "G15_influenza" => 0, "G16_influenza" => 0),
    'BK014 Faringitis' => array("G14_faringitis" => 0.8, "G16_faringitis" => 1, "G17_faringitis" => 0),
    'BK015 Faringitis' => array("G14_faringitis" => 0.8, "G15_faringitis" => 0.8, "G16_faringitis" => 1),
    'BK016 Faringitis' => array("G04_faringitis" => 0.6, "G06_faringitis" => 0, "G14_faringitis" => 0.8, "G15_faringitis" => 0.8, "G16_faringitis" => 1),
    'BK017 Faringitis' => array("G04_faringitis" => 0.6,  "G08_faringitis" => 0,  "G14_faringitis" => 0.8, "G16_faringitis" => 1),
    'BK018 Laringitis' => array("G04_laringitis" => 0.6, "G08_laringitis" => 0.4, "G14_laringitis" => 0.4, "G15_laringitis" => 0, "G17_laringitis" => 0.6),
    'BK019 Laringitis' => array("G09_laringitis" => 0.4, "G17_laringitis" => 0.6, "G18_laringitis" => 0.8),
    'BK020 Laringitis' => array("G14_laringitis" => 0.4, "G17_laringitis" => 0.6, "G19_laringitis" => 1),
    'BK021 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G03_influenza" => 0.8,"G04_influenza" => 0.6,"G09_influenza" => 0.4),
    'BK022 Influenza' => array("G04_influenza" => 0.6, "G05_influenza" => 0.6, "G07_influenza" => 0.4,"G08_influenza" => 0.4),
    'BK023 Influenza' => array("G02_influenza" => 0.8, "G08_influenza" => 0.4, "G13_influenza" => 0.4,"G10_influenza" => 0.6),
    'BK024 Faringitis' => array("G04_faringitis" => 0.6, "G06_faringitis" => 0, "G14_faringitis" => 0.8,"G16_faringitis" => 1),
    'BK025 Laringitis' => array("G04_laringitis" => 0.6, "G08_laringitis" => 0.4, "G17_laringitis" => 0.6,"G18_laringitis" => 0.8),
    'BK026 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G07_influenza" => 0.4,"G13_influenza" => 0.4),
    'BK027 Influenza' => array("G04_influenza" => 0.6, "G05_influenza" => 0.6, "G07_influenza" => 0.4,"G09_influenza" => 0.4),
    'BK028 Influenza' => array("G02_influenza" => 0.8, "G04_influenza" => 0.6, "G06_influenza" => 0.6, "G13_influenza" => 0.4),
    'BK029 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G06_influenza" => 0.6, "G10_influenza" => 0.6),
    'BK030 Influenza' => array("G02_influenza" => 0.8, "G09_influenza" => 0.4, "G11_influenza" => 0.6, "G12_influenza" => 0.2),
    'BK031 Faringitis' => array("G04_faringitis" => 0.6, "G08_faringitis" => 0, "G14_faringitis" => 0.8, "G17_faringitis" => 0),
    'BK032 Faringitis' => array("G04_faringitis" => 0.6,"G09_faringitis" => 0,"G15_faringitis" => 0.8,"G16_faringitis" => 1),
    'BK033 Influenza' => array("G01_influenza" => 1,"G07_influenza" => 0.4,"G10_influenza" => 0.6,"G17_influenza" => 0.4),
    'BK034 Faringitis' => array("G02_faringitis" => 0, "G04_faringitis" => 0.6, "G08_faringitis" => 0, "G17_faringitis" => 0),
    'BK035 Laringitis' => array("G04_laringitis" => 0.6, "G08_laringitis" => 0.4, "G14_laringitis" => 0.4, "G18_laringitis" => 0.8),
    'BK036 Influenza' => array("G01_influenza" => 1, "G02_influenza" => 0.8, "G04_influenza" => 0.6, "G09_influenza" => 0.4),
    'BK037 Influenza' => array("G02_influenza" => 0.8, "G05_influenza" => 0.6, "G08_influenza" => 0.4, "G14_influenza" => 0),
    'BK038 Faringitis' => array("G04_faringitis" => 0.6, "G09_faringitis" => 0, "G15_faringitis" => 0.8, "G19_faringitis" => 0),
    'BK039 Faringitis' => array("G02_faringitis" => 0, "G04_faringitis" => 0.6, "G14_faringitis" => 0.8, "G17_faringitis" => 0),
    'BK040 Influenza' => array("G02_influenza" => 0.8, "G04_influenza" => 0.6, "G09_influenza" => 0.4, "G14_influenza" => 0),
    'BK041 Influenza' => array("G04_influenza" => 0.6, "G02_influenza" => 0.8, "G08_influenza" => 0.4, "G07_influenza" => 0.4),
    'BK042 Faringitis' => array("G02_faringitis" => 0,"G04_faringitis" => 0.6,"G06_faringitis" => 0,"G14_faringitis" => 0.8),
    'BK043 Influenza' => array("G01_influenza" => 1,"G02_influenza" => 0.8,"G04_influenza" => 0.6,"G05_influenza" => 0.6,"G09_influenza" => 0.4),
    'BK044 Faringitis' => array("G04_faringitis" => 0.6,"G08_faringitis" => 0,"G14_faringitis" => 0.8,"G17_faringitis" => 0),
    'BK045 Faringitis' => array("G02_faringitis" => 0,"G09_faringitis" => 0,"G15_faringitis" => 0.8,"G19_faringitis" => 0)
);

// Inputan bobot dari user
$user_symptoms = array();
foreach ($_POST as $symptom => $value) {
    if ($value > 0) {
        $user_symptoms[$symptom] = $value;
    }
}

// Fungsi untuk menghitung similarity
function calculateSimilarity($user_symptoms, $weights) {
    $similarities = array();
    foreach ($weights as $disease => $symptoms_weights) {
        $a = 0;
        $b = 0;

        foreach ($symptoms_weights as $symptom => $weight) {
            if (isset($user_symptoms[$symptom])) {
                // Menghitung nilai a
                $a += $weight * 1; // Karena jika sama, dikali 1
            } else {
                $a += $weight * 0; // Karena jika tidak sama, dikali 0
            }

            // Menghitung nilai b
            $b += $weight;
        }

        // Menghitung similarity
        if (($a + $b) != 0 && $b != 0) {
            $similarity = $a / $b;
        } else {
            $similarity = 0;
        }

        $similarities[$disease] = $similarity;
    }
    return $similarities;
}

// Fungsi untuk menentukan penyakit berdasarkan similarity tertinggi
function determineDisease($similarities) {
    $max_similarity = max($similarities);
    $diseases = array_keys($similarities, $max_similarity);
    return array($diseases, $max_similarity);
}

// Hitung similarity antara gejala pengguna dengan setiap penyakit
$similarities = calculateSimilarity($user_symptoms, $weights);

// Tampilkan hasil similarity
echo "<h1 style='color: #00698f; font-size: 24px; text-align: center;'>Hasil penghitungan similarity:</h1>";
foreach ($similarities as $disease => $similarity) {
    echo "<p style='font-size: 18px; margin-bottom: 10px; text-align: center;'>$disease: $similarity</p>";
}

// Tentukan penyakit berdasarkan similarity tertinggi
list($diseases, $max_similarity) = determineDisease($similarities);

// Output hasil diagnosa
echo "<h1 style='color: #00698f; font-size: 24px; text-align: center;'>Hasil diagnosa:</h1>";
foreach ($diseases as $disease) {
    echo "<p style='font-size: 18px; margin-bottom: 10px; text-align: center;'>Penyakit $disease adalah penyakit yang mungkin Anda alami dengan nilai similaritas $max_similarity.</p>";
}
?>
