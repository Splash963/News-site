<style>
    .spinner-wrapper{
        background-color: white;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 10s ease;
    }

    .spinner-border{
        width: 4rem;
        height: 4rem;
        border-width: 7px;
    }
</style>


<div class="spinner-wrapper">
    <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<script>
    const spinnerWrapperEl = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', () =>{
        spinnerWrapperEl.style.opacity = '0';

        setTimeout(() => {
            spinnerWrapperEl.style.display = 'none';
        }, 300);
    });
</script>