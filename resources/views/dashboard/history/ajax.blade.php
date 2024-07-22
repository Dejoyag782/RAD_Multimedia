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

                document.getElementById('selectedImage').style.backgroundImage = `url(${data.photo ? 'storage/' + data.photo : 'https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg'})`;
                document.getElementById('timeline').value = data.timeline; // Changed from text to value
                document.getElementById('title').value = data.title; // Changed from text to value
                document.getElementById('desc').value = data.desc; // Changed from text to value
            } catch (error) {
                console.error('Fetch error:', error);
            }
        });
    });
});
</script>
