<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received a message.\n", FILE_APPEND);
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Batch Showcase | Britishway English Academy</title>
    <style>
        /* CSS Variables for easy color changes */
        :root {
            --primary-blue: #1a2a6c;
            --accent-red: #b21f1f;
            --light-bg: #f4f7f6;
            --white: #ffffff;
            --text-dark: #333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            margin: 0;
            color: var(--text-dark);
        }

        /* Header Styling */
        header {
            background: linear-gradient(to right, var(--primary-blue), var(--accent-red));
            color: var(--white);
            padding: 3rem 1rem;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        header h1 { margin: 0; font-size: 2.5rem; }
        header h2 { margin: 0; font-size: 1.75rem; }
        header p { margin-top: 10px; opacity: 0.9; font-size: 1.1rem; }

        /* Grid Layout */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }

        /* Card Styling */
        .card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #ddd;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }

        .card-preview {
            height: 180px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #888;
            background-image: linear-gradient(45deg, #eee 25%, transparent 25%, transparent 75%, #eee 75%, #eee), 
                              linear-gradient(45deg, #eee 25%, transparent 25%, transparent 75%, #eee 75%, #eee);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
        }

        .card-content {
            padding: 20px;
            flex-grow: 1;
        }

        .student-name {
            font-size: 0.9rem;
            color: var(--accent-red);
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .project-title {
            font-size: 1.4rem;
            margin: 10px 0;
            color: var(--primary-blue);
        }

        .btn-link {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: var(--primary-blue);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background 0.2s;
        }

        .btn-link:hover {
            background-color: var(--accent-red);
        }

        footer {
            text-align: center;
            padding: 40px;
            color: #777;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<header>
    <h1>Britishway English Academy</h1>
    <h2>Kiribathgoda</h2>
    <p>Web Development Projects | 1st Batch Students</p>
</header>

<div class="container">
    <div class="project-grid">

		<! KBKBDI5_DeenaShanali>
        <div class="card">
            <div class="card-preview"><img src="KBKBDI5_DeenaShanaliCvr.jpg" height="180px" width="100%" /></div>
            <div class="card-content">
                <span class="student-name">By: Deena Shanali</span>
                <h3 class="project-title">Coffee Bliss</h3>
                <p>your perfect place to relax, enjoy fresh coffee, and spend quality time. .</p>
                <a href="KBKBDI5_DeenaShanali/index.html" class="btn-link" target="_blank">View Project</a>
            </div>
        </div>

		<! KBKBDI6_GaganiIsidari>
        <div class="card">
            <div class="card-preview"><img src="KBKBDI6_GaganiIsidariCvr.jpg" height="180px" width="100%" /></div>
            <div class="card-content">
                <span class="student-name">By: Gagani Isidari</span>
                <h3 class="project-title">NOAH</h3>
                <p>Super value deals on all products, Save more with coupons & up to 70% off.</p>
                <a href="KBKBDI6_GaganiIsidari/index.html" class="btn-link" target="_blank">View Project</a>
            </div>
        </div>

		<! KBKBDI16_OshadhieJayasekara>
        <div class="card">
            <div class="card-preview"><img src="KBKBDI16_OshadhieJayasekaraCvr.jpg" height="180px" width="100%" /></div>
            <div class="card-content">
                <span class="student-name">By: Oshadhie Jayasekara</span>
                <h3 class="project-title">SnapMates</h3>
                <p>A creative photography group for passionate photographers.</p>
                <a href="KBKBDI16_OshadhieJayasekara/index.html" class="btn-link" target="_blank">View Project</a>
            </div>
        </div>

        </div>
</div>

<footer>
    &copy; 2026 Britishway English Academy. All Rights Reserved.
</footer>

</body>
</html>
<? 
} 
?>
