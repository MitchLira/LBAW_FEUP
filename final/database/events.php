<?php
include_once('../../config/init.php');

function notGoToCinemaEvent($idcustomer, $idevent){
	global $conn;
	$stmt = $conn->prepare("
		BEGIN;
		SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
		DELETE FROM guest
		WHERE idcustomer = ?
		AND idevent = ?;

		UPDATE statistics
		SET cinemacount = cinemacount - 1
		WHERE stattype = 'invited'
		AND idcustomer = ?;
		COMMIT;
	");
	$stmt->execute(array($idcustomer, $idevent, $idcustomer));
}

function notGoToConcertEvent($idcustomer, $idevent){
	global $conn;
	$stmt = $conn->prepare("
		BEGIN;
		SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
		DELETE FROM guest
		WHERE idcustomer = ?
		AND idevent = ?;

		UPDATE statistics
		SET concertcount = concertcount - 1
		WHERE stattype = 'invited'
		AND idcustomer = ?;
		COMMIT;
	");
	$stmt->execute(array($idcustomer, $idevent, $idcustomer));
}

function notGoToDanceEvent($idcustomer, $idevent){
	global $conn;
	$stmt = $conn->prepare("
		BEGIN;
		SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
		DELETE FROM guest
		WHERE idcustomer = ?
		AND idevent = ?;

		UPDATE statistics
		SET dancecount = dancecount - 1
		WHERE stattype = 'invited'
		AND idcustomer = ?;
		COMMIT;
	");
	$stmt->execute(array($idcustomer, $idevent, $idcustomer));
}

function notGoToExhibitionEvent($idcustomer, $idevent){
	global $conn;
	$stmt = $conn->prepare("
		BEGIN;
		SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
		DELETE FROM guest
		WHERE idcustomer = ?
		AND idevent = ?;

		UPDATE statistics
		SET exhibitioncount = exhibitioncount - 1
		WHERE stattype = 'invited'
		AND idcustomer = ?;
		COMMIT;
	");
	$stmt->execute(array($idcustomer, $idevent, $idcustomer));
}

function notGoToTheatreEvent($idcustomer, $idevent){
	global $conn;
	$stmt = $conn->prepare("
		BEGIN;
		SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
		DELETE FROM guest
		WHERE idcustomer = ?
		AND idevent = ?;

		UPDATE statistics
		SET theatrecount = theatrecount - 1
		WHERE stattype = 'invited'
		AND idcustomer = ?;
		COMMIT;
	");
	$stmt->execute(array($idcustomer, $idevent, $idcustomer));
}

	function goToCinemaEvent($idcustomer, $idevent){
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
			INSERT INTO guest
			(idcustomer, idevent)
			VALUES (?, ?);

			UPDATE statistics
			SET cinemacount = cinemacount + 1
			WHERE stattype = 'invited'
			AND idcustomer = ?;
			COMMIT;
		");
		$stmt->execute(array($idcustomer, $idevent, $idcustomer));
	}

	function goToConcertEvent($idcustomer, $idevent){
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
			INSERT INTO guest
			(idcustomer, idevent)
			VALUES (?, ?);

			UPDATE statistics
			SET concertcount = concertcount + 1
			WHERE stattype = 'invited'
			AND idcustomer = ?;
			COMMIT;
		");
		$stmt->execute(array($idcustomer, $idevent, $idcustomer));
	}

	function goToDanceEvent($idcustomer, $idevent){
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
			INSERT INTO guest
			(idcustomer, idevent)
			VALUES (?, ?);

			UPDATE statistics
			SET dancecount = dancecount + 1
			WHERE stattype = 'invited'
			AND idcustomer = ?;
			COMMIT;
		");
		$stmt->execute(array($idcustomer, $idevent, $idcustomer));
	}

	function goToExhibitionEvent($idcustomer, $idevent){
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
			INSERT INTO guest
			(idcustomer, idevent)
			VALUES (?, ?);

			UPDATE statistics
			SET exhibitioncount = exhibitioncount + 1
			WHERE stattype = 'invited'
			AND idcustomer = ?;
			COMMIT;
		");
		$stmt->execute(array($idcustomer, $idevent, $idcustomer));
	}

	function goToTheatreEvent($idcustomer, $idevent){
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL READ COMMITTED;
			INSERT INTO guest
			(idcustomer, idevent)
			VALUES (?, ?);

			UPDATE statistics
			SET theatrecount = theatrecount + 1
			WHERE stattype = 'invited'
			AND idcustomer = ?;
			COMMIT;
		");
		$stmt->execute(array($idcustomer, $idevent, $idcustomer));
	}

	function createCinemaEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $picture) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type, picture)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET cinemacount = cinemacount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $picture, $idcustomer, $idcustomer));
	}

	function createConcertEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $picture) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type, picture)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET concertcount = concertcount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $picture, $idcustomer, $idcustomer));
		}

	function createDanceEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $picture) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type, picture)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET dancecount = dancecount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $picture, $idcustomer, $idcustomer));
		}

	function createExhibitionEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $picture) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type, picture)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET exhibitioncount = exhibitioncount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $picture, $idcustomer, $idcustomer));
		}

	function createTheatreEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $picture) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type, picture)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET theatrecount = theatrecount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $picture, $idcustomer, $idcustomer));
		}


	function getEventInfo($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE idevent = ?");
		$stmt->execute(array($id));
		return $stmt->fetch();
	}

	function getEventID($title) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE title = ?");
		$stmt->execute(array($title));
		return $stmt->fetch()['idevent'];
	}

	function get5BestEvents() {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event ORDER BY average_rate DESC LIMIT 5");
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function listEvents() {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event");
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function updateEvent($idevent, $title, $type, $district, $area, $address, $zip_code, $date, $time, $price, $overview, $picture){
		global $conn;
		$stmt = $conn->prepare("UPDATE event SET
									title=?,
									type=?,
									district=?,
									area=?,
									address=?,
									zip_code=?,
									date=?,
									time=?,
									price=?,
									overview=?,
									picture = ?
								WHERE idevent=?");
		$stmt->execute(array($title, $type, $district, $area, $address, $zip_code, $date, $time, $price, $overview, $picture, $idevent));
	}

	function updatePicture($idevent, $path){
		global $conn;
		$stmt = $conn->prepare("UPDATE event SET picture=? WHERE idevent=?");
		$stmt->execute(array($path, $idevent));
	}

	function isEventFromUser($idcustomer, $idevent){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM host WHERE idcustomer = ? AND idevent = ?");
    $stmt->execute(array($idcustomer, $idevent));
    return $stmt->fetch() == true;

  }

  function becameHost($idcustomer, $idevent){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO host (idcustomer, idevent) VALUES (?, ?)");
		$stmt->execute(array($idcustomer, $idevent));
  }

	function verifyHosts($idevent){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM host WHERE idevent = ?");
		$stmt->execute(array($idevent));
		return count($stmt->fetchAll());
	}

	function verifyIfIsHost($idcustomer, $idevent){
		global $conn;
    $stmt = $conn->prepare("SELECT * FROM host WHERE idcustomer = ? AND idevent = ?");
    $stmt->execute(array($idcustomer, $idevent));
    return $stmt->fetch() == true;
	}

	function getEventHosts($idevent){
		global $conn;
    $stmt = $conn->prepare("SELECT * FROM host WHERE idevent = ?");
    $stmt->execute(array( $idevent));
    return $stmt->fetchAll();
	}

  function deleteEvent($idevent)
  {
	  global $conn;
		$stmt = $conn->prepare("DELETE FROM event WHERE idevent = ?");
		$stmt->execute(array($idevent));
  }

	function searchEventsString($string){
		global $conn;
		$stmt = $conn->prepare("SELECT *, ts_rank(to_tsvector(title), query)  AS rank FROM event, to_tsquery(?) AS query ORDER BY rank DESC LIMIT 20");
		$string = $string.":*";
		$stmt->execute(array($string));
		return $stmt->fetchAll();
	}

	function get10NextEvents() {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE event.date >= current_date ORDER BY date ASC LIMIT 10");
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function rateEvent($idevent, $idcustomer, $rate) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO rate (idcustomer, idevent, rate) VALUES (?, ?, ?)");
		$stmt->execute(array($idcustomer, $idevent, $rate));
		return $stmt->fetchAll();
	}

	function userRated($idevent, $idcustomer){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM rate WHERE idevent = ? AND idcustomer = ?;");
		$stmt->execute(array($idevent, $idcustomer));
		return $stmt->fetch() == true;
	}

	function updateRateEvent($idevent, $idcustomer, $rate) {
		global $conn;
		$stmt = $conn->prepare("UPDATE rate SET rate=? WHERE idcustomer=? AND idevent=?;");
		$stmt->execute(array($rate, $idcustomer, $idevent));
		return $stmt->fetchAll();
	}

	function isGoingToTheEvent($idcustomer, $idevent) {
	global $conn;
    $stmt = $conn->prepare("SELECT * FROM guest WHERE idcustomer = ? AND idevent = ?");
    $stmt->execute(array($idcustomer, $idevent));
    return $stmt->fetch() == true;
	}

	function eventDateValid($date)
	{
		$now = time();
		if(strtotime($date) < strtotime($now))
			return false;
		else
			return true;
	}
?>
