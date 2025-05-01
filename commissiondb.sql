DROP DATABASE commissiondb;
CREATE DATABASE IF NOT EXISTS commissiondb;
USE commissiondb;


CREATE TABLE IF NOT EXISTS commissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    deadline VARCHAR(50),
    project_description TEXT NOT NULL,
    budget VARCHAR(30) NOT NULL
);

INSERT INTO commissions (userName, email, phone, deadline, project_description, budget) VALUES
('Luke Skywalker', 'luke@rebellion.org', '555-1234', '2025-06-01', 'Custom lightsaber hilt design for ceremonies.', '500'),
('Leia Organa', 'leia@alderaan.gov', '555-5678', '2025-05-15', 'Royal gown recreation for Alderaan memorial.', '800'),
('Han Solo', 'han@falconmail.com', '555-1357', '2025-07-04', 'Smuggler jacket reproduction, authentic weathering.', '750'),
('Darth Vader', 'vader@empire.gov', '555-2468', '2025-06-30', 'Replica Sith armor pieces, matte black finish.', '1200'),
('Obi-Wan Kenobi', 'obiwan@jediorder.net', '555-8642', '2025-05-20', 'Traditional Jedi robes with desert wear materials.', '650'),
('Yoda', 'yoda@dagobah.swamp', '555-3141', '2025-08-01', 'Miniature walking cane with carved runes.', '300'),
('Padmé Amidala', 'padme@naboosenate.gov', '555-7272', '2025-05-25', 'Naboo ceremonial dress restoration.', '950'),
('Boba Fett', 'boba@bountyhuntermail.com', '555-9999', '2025-06-15', 'Mandalorian armor set, battle-damaged finish.', '2000'),
('Ahsoka Tano', 'ahsoka@fulcrum.org', '555-8080', '2025-07-10', 'Dual white-bladed lightsaber replicas.', '1100'),
('Kylo Ren', 'kylo@firstorder.org', '555-0000', '2025-06-20', 'Crossguard lightsaber prop with unstable blade effect.', '1500');
