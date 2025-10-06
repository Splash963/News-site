<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <head>
        @include('admin.admin-layouts.offcanvas')
    </head>

    <body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0;">
            
    <div>
        @include('layouts.line')
    </div>
    
    <h1 style="text-align: center; margin-top: 50px; color: #343a40;">Add News</h1>
        <p style="text-align: center; color: #6c757d;">Use the form below to add a news article to the website.</p>

        <div style="max-width: 600px; margin: 30px auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <form action="">
                <!-- News Type -->
                <div style="margin-bottom: 20px;">
                    <label for="news-type" style="display: block; margin-bottom: 10px; font-weight: 600;">Select News Type:</label>
                    <div style="display: flex; gap: 20px;">
                        <div style="display: flex; align-items: center;">
                            <input type="radio" name="news-type" id="normal" style="margin-right: 8px;">
                            <label for="normal" style="margin: 0;">Normal</label>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <input type="radio" name="news-type" id="main" style="margin-right: 8px;">
                            <label for="main" style="margin: 0;">Main</label>
                        </div>
                    </div>
                </div>

                <!-- Category -->
                <div style="margin-bottom: 20px;">
                    <label for="category" style="display: block; margin-bottom: 10px; font-weight: 600;">Select Category:</label>
                    <select id="category" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                        <option selected>Select Category</option>
                        <option value="select" disabled>Select</option>
                        <option value="politics">Politics</option>
                        <option value="crime">Crime</option>
                        <option value="sports">Sports</option>
                        <option value="world-news">World News</option>
                        <option value="business">Business</option>
                        <option value="education">Education</option>
                        <option value="health">Health</option>
                    </select>
                </div>

                <!-- Title -->
                <div style="margin-bottom: 20px;">
                    <label for="title" style="display: block; margin-bottom: 10px; font-weight: 600;">Enter Title:</label>
                    <input type="text" id="title" placeholder="Enter title" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>

                <!-- Description -->
                <div style="margin-bottom: 20px;">
                    <label for="description" style="display: block; margin-bottom: 10px; font-weight: 600;">Enter Description:</label>
                    <textarea id="description" placeholder="Enter a Description here" style="width: 100%; height: 100px; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;"></textarea>
                </div>

                <!-- Image Upload -->
                <div style="margin-bottom: 20px;">
                    <label for="image" style="display: block; margin-bottom: 10px; font-weight: 600;">Upload Image:</label>
                    <input type="file" id="image" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>

                <!-- Submit Button -->
                <div style="text-align: center;">
                    <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-weight: 600; cursor: pointer;">
                        Submit News
                    </button>
                </div>
            </form>
        </div>
    </body>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>