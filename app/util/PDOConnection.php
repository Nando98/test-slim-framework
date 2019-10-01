<?php

class PDOConnection
{
    /**
     * This function create a database connection
     *
     * @return    object    database connection
     */
    public static function getConnection()
    {
        /** @var string $host - Hostname */
        $host = getenv('DB_HOSTNAME');

        /** @var string $name - Database name */
        $name = getenv('DB_DATABASE');

        /** @var string $user - Database username */
        $user = getenv('DB_USERNAME');

        /** @var string $pass - Database password */
        $pass = getenv('DB_PASSWORD');

        /** @var string $dsn - Connection string */
        $dsn = "mysql:host=$host;port=3306;dbname=$name";

        // Create a new PDO connection
        $connection = new PDO($dsn, $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Return the connection
        return $connection;
    }

    public static function getStatus()
    {
        try {
            $cnx = PDOConnection::getConnection();
            return $cnx->getAttribute(PDO::ATTR_CONNECTION_STATUS);
        } catch (PDOException $e) {
            print_r($e->errorInfo);
        } catch (Exception $e) {
            print_r($e->getMessage());
        } finally {
            $cnx = NULL;
        }
    }
}