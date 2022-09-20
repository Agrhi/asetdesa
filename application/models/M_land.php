<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_land extends CI_Model
{
	public function get()
	{
		$sql = "SELECT
		koleksi.idkategori,
		kategori.namakategori,
		koleksi.gambar
		FROM `koleksi`
		JOIN kategori ON koleksi.idkategori = kategori.idkategori
		GROUP BY koleksi.idkategori;";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getkol($id)
	{
		$sql = "SELECT
		koleksi.idkoleksi,
		koleksi.namakoleksi,
		kategori.namakategori,
		koleksi.gambar
		FROM `koleksi`
		JOIN kategori ON kategori.idkategori = koleksi.idkategori
		WHERE koleksi.idkategori = '" . $id . "'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function gets($id)
	{
		$sql = "SELECT
		koleksi.namakoleksi,
		koleksi.bahan,
		koleksi.noinves,
		koleksi.lembaga,
		koleksi.tatap,
		koleksi.ket,
		koleksi.gambar,
		kategori.namakategori
		FROM `koleksi`
		JOIN kategori ON kategori.idkategori = koleksi.idkategori
		WHERE koleksi.idkoleksi = '" . $id . "'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function getkategori($id)
	{
		$sql = "SELECT *  FROM `kategori` WHERE `idkategori`  = '" . $id . "'";
		$data = $this->db->query($sql);
		return $data->row();
	}
}
