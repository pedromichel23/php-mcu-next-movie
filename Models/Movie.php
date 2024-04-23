<?php

declare(strict_types=1);

class Movie
{

    public function __construct(
        private string $title,
        private int $days_until,
        private string $type,
        private string $release_date,
        private string $following_production,
        private string $poster_url
    ) {
    }

    public function get_title()
    {
        return $this->title;
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_release_date()
    {
        return $this->release_date;
    }

    public function get_following_production()
    {
        return $this->following_production;
    }

    public function get_poster_url()
    {
        return $this->poster_url;
    }

    public function getMovieDaysUntil(): string
    {
        $days = $this->days_until;
        return  match (true) {
            $days == 0  => "¡Hoy se estrena! 🥳",
            $days == 1  => "Mañana se estrena 🚀",
            $days < 7   => "Esta semana se estrena 🙀",
            $days < 30  => "Este mes se estrena 📅",
            default     => "{$days} dias hasta el estreno 📅",
        };
    }

    public static function fetch_and_create_movie(string $api_url): Movie
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result);
        return new self(
            $data->title,
            $data->days_until,
            $data->type,
            $data->release_date,
            $data->following_production->title ?? "Desconocido",
            $data->poster_url
        );
    }
}
