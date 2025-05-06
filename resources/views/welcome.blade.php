<style>
    /* Style the Prev and Next buttons */
    .slick-prev,
    .slick-next {
        color: transparent;
        border: none;
        padding: 15px 30px;
        cursor: pointer;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        z-index: 1;
        transform: translateY(-50%);
    }

    /* Adjust positioning for next button */
    .slick-next {
        right: -60px;
        /* Position the next button on the right side */
    }

    /* Adjust positioning for prev button */
    .slick-prev {
        left: -10px;
        /* Position the prev button on the left side */
    }

    /* Add color and style to arrows using the ::before pseudo-element */
    .slick-prev::before,
    .slick-next::before {
        font-family: 'slick';
        /* Use the Slick font for the arrows */
        content: '';
        /* Remove any existing content */
        font-size: 30px;
        /* Increase the size of the arrows */
        color: white;
        /* Arrow color */
    }

    /* Modify the arrows' colors for the 'previous' button */
    .slick-prev::before {
        content: '←';
        /* Use the left arrow */
        color: #ff0000;
        /* Red color for the previous button */
    }

    /* Modify the arrows' colors for the 'next' button */
    .slick-next::before {
        content: '→';
        /* Use the right arrow */
        color: #00ff00;
        /* Green color for the next button */
    }
</style>
