document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // 1. Remove 'active' class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // 2. Add 'active' class to clicked button
                    button.classList.add('active');

                    // 3. Get the filter value
                    const filterValue = button.getAttribute('data-filter');

                    // 4. Filter logic
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('hide');
                            item.classList.add('show');
                        } else {
                            item.classList.remove('show');
                            item.classList.add('hide');
                        }
                    });
                });
            });
        });

