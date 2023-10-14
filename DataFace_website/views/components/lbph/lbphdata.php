<a href="#" id="top"><i class="fa-solid fa-house"></i></a>

<section id="lbph_one">
    <div class="lbph_info">
        <h2>Intorduction</h2>
        <p>Local Binary Pattern (LBP) is a simple yet very efficient texture operator which labels the pixels of an image by thresholding the neighborhood of each pixel and considers the result as a binary number.
        <br>
        It was first described in 1994 (LBP) and has since been found to be a powerful feature for texture classification. It has further been determined that when LBP is combined with histograms of oriented gradients (HOG) descriptor, it improves the detection performance considerably on some datasets.
        <br>
        Using the LBP combined with histograms we can represent the face images with a simple data vector.
        <br>
        As LBP is a visual descriptor it can also be used for face recognition tasks, as can be seen in the following step-by-step explanation.
        </p>
        <h3>Step-by-Step</h3>
        <p>Now that we know a little more about face recognition and the LBPH, let’s go further and see the steps of the algorithm:</p>
        <h2>Parameters: the LBPH uses 4 parameters:</h2>
        <ul>
            <li>Radius: the radius is used to build the circular local binary pattern and represents the radius around the central pixel. It is usually set to 1.</li><br>
            <li>Neighbors: the number of sample points to build the circular local binary pattern. Keep in mind: the more sample points you include, the higher the computational cost. It is usually set to 8.</li><br>
            <li>Grid X: the number of cells in the horizontal direction. The more cells, the finer the grid, the higher the dimensionality of the resulting feature vector. It is usually set to 8.</li><br>
            <li>Grid Y: the number of cells in the vertical direction. The more cells, the finer the grid, the higher the dimensionality of the resulting feature vector. It is usually set to 8.</li><br>
        </ul>
        <p>Don’t worry about the parameters right now, you will understand them after reading the next steps.</p>
    </div>
</section>
<section id="lbph_two">
    <div class="lbph_info">
        <h2>Training the Algorithm</h2>
        <p>First, we need to train the algorithm. To do so, we need to use a dataset with the facial images of the people we want to recognize. We need to also set an ID (it may be a number or the name of the person) for each image, so the algorithm will use this information to recognize an input image and give you an output. Images of the same person must have the same ID. With the training set already constructed, let’s see the LBPH computational steps.</p>

    </div>
</section>
<section id="lbph_three">
    <div class="lbph_info">
        <h2>Applying the LBP operation</h2>
        <p>The first computational step of the LBPH is to create an intermediate image that describes the original image in a better way, by highlighting the facial characteristics. To do so, the algorithm uses a concept of a sliding window, based on the parameters radius and neighbors.<br>
        The image below shows this procedure:
        </p>
        <div class="lbph_img_con">
            <img src="views/images/home/img_one.webp">
        </div>
        <h3>Based on the image above, let’s break it into several small steps so we can understand it easily:</h3>
        <ul>
            <li>Suppose we have a facial image in grayscale.</li><br>
            <li>We can get part of this image as a window of 3x3 pixels.</li><br>
            <li>It can also be represented as a 3x3 matrix containing the intensity of each pixel (0~255).</li><br>
            <li>Then, we need to take the central value of the matrix to be used as the threshold.</li><br>
            <li>This value will be used to define the new values from the 8 neighbors.</li><br>
            <li>For each neighbor of the central value (threshold), we set a new binary value. We set 1 for values equal or higher than the threshold and 0 for values lower than the threshold.</li><br>
            <li>Now, the matrix will contain only binary values (ignoring the central value). We need to concatenate each binary value from each position from the matrix line by line into a new binary value (e.g. 10001101). Note: some authors use other approaches to concatenate the binary values (e.g. clockwise direction), but the final result will be the same.</li><br>
            <li>Then, we convert this binary value to a decimal value and set it to the central value of the matrix, which is actually a pixel from the original image.</li><br>
            <li>At the end of this procedure (LBP procedure), we have a new image which represents better the characteristics of the original image.</li><br>
            <li>Note: The LBP procedure was expanded to use a different number of radius and neighbors, it is called Circular LBP.</li><br>
        </ul>
        <div class="lbph_img_con">
            <img src="views/images/home/img_two.webp">
        </div>
        <p>It can be done by using bilinear interpolation. If some data point is between the pixels, it uses the values from the 4 nearest pixels (2x2) to estimate the value of the new data point.</p>
    </div>
</section>
<section id="lbph_four">
    <div class="lbph_info">
        <h2>Extracting the Histograms</h2>
        <p>Now, using the image generated in the last step, we can use the Grid X and Grid Y parameters to divide the image into multiple grids, as can be seen in the following image:</p>
        <div class="lbph_img_con">
            <img src="views/images/home/img_three.webp">
        </div>
        <h3>Based on the image above, we can extract the histogram of each region as follows:</h3>
        <ul>
            <li>As we have an image in grayscale, each histogram (from each grid) will contain only 256 positions (0~255) representing the occurrences of each pixel intensity.</li><br>
            <li>Then, we need to concatenate each histogram to create a new and bigger histogram. Supposing we have 8x8 grids, we will have 8x8x256=16.384 positions in the final histogram. The final histogram represents the characteristics of the image original image.</li><br>
        </ul>
        <h3>The LBPH algorithm is pretty much it.</h3>

    </div>
</section>
<section id="lbph_five">
    <div class="lbph_info">
        <h2>Performing the face recognition</h2>
        <p>In this step, the algorithm is already trained. Each histogram created is used to represent each image from the training dataset. So, given an input image, we perform the steps again for this new image and creates a histogram which represents the image.</p><br>
        <ul>
            <li>So to find the image that matches the input image we just need to compare two histograms and return the image with the closest histogram.</li><br>
            <li>We can use various approaches to compare the histograms (calculate the distance between two histograms), for example: euclidean distance, chi-square, absolute value, etc. In this example, we can use the Euclidean distance (which is quite known) based on the following formula:</li><br>
        </ul>
        <div class="lbph_img_con" id="euclidean">
            <img src="views/images/home/img_four.gif">
        </div>
        <ul>
            <li>So the algorithm output is the ID from the image with the closest histogram. The algorithm should also return the calculated distance, which can be used as a ‘confidence’ measurement. Note: don’t be fooled about the ‘confidence’ name, as lower confidences are better because it means the distance between the two histograms is closer.</li><br>
            <li>We can then use a threshold and the ‘confidence’ to automatically estimate if the algorithm has correctly recognized the image. We can assume that the algorithm has successfully recognized if the confidence is lower than the threshold defined.</li><br>
        </ul>

    </div>
</section>