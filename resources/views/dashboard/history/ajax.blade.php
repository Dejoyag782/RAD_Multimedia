<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.view-history-btn').forEach(button => {
        button.addEventListener('click', async () => {
            const id = button.getAttribute('data-id');
            console.log(id);
            try {
                const response = await fetch(`/history/${id}`);
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();

                // Set the values in the modal
                document.getElementById('id').value = data.id;
                console.log(data.id);
                console.log(data.photo);                
                console.log(data.timeline);                
                console.log(data.title);                
                console.log(data.desc);

                document.getElementById('submitBtn').innerText = 'Submit Changes';
                document.getElementById('selectedImage').style.backgroundImage = `url(${data.photo ? 'storage/' + data.photo : 'https://static.vecteezy.com/system/resources/previews/021/277/888/original/picture-icon-in-flat-design-style-gallery-symbol-illustration-png.png'})`;
                document.getElementById('timeline').value = data.timeline; // Changed from text to value
                document.getElementById('title').value = data.title; // Changed from text to value
                document.getElementById('desc').value = data.desc; // Changed from text to value
            } catch (error) {
                console.error('Fetch error:', error);
            }
        });
    });


    document.querySelectorAll('.add-timeline-btn').forEach(button => {
        button.addEventListener('click', async () => {

                // Set the values in the modal
                document.getElementById('id').value = '';

                document.getElementById('submitBtn').innerText = 'Add Timeline';
                document.getElementById('selectedImage').style.backgroundImage = `url('https://static.vecteezy.com/system/resources/previews/021/277/888/original/picture-icon-in-flat-design-style-gallery-symbol-illustration-png.png')`;
                document.getElementById('timeline').value = ''; // Changed from text to value
                document.getElementById('title').value = ''; // Changed from text to value
                document.getElementById('desc').value = ''; // Changed from text to value
           
        });
    });

    

});


</script>
